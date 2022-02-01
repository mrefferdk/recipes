<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\DB;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = DB::table('recipes')->orderBy('title')->get();
        return view('recipes.list', ['recipes' => $recipes, 'isEditMode' => $this->adminService->isEditMode()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'mimes:png,jpg|max:2048'
        ]);

        $fileName = null;
        if ($request->file()) {
            dd('ffff');
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

         //   $fileModel->file_path = '/storage/' . $filePath;
        }


        $recipe = new Recipe();
        $recipe->title = $request->get('title');
        $recipe->body = $request->get('body');
        $recipe->number = $request->get('number');
        $recipe->cooking_time = $request->get('cooking_time');
        $recipe->work_time = $request->get('work_time');
        $recipe->image_path = $fileName;
        $recipe->save();
        return redirect('/recipes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $recipe = Recipe::find($id);

        $totalTime = (int) $recipe->work_time + (int) $recipe->cooking_time;
        return view('recipes.show', [
            'recipe' => $recipe,
            'showEditOptions' => $request->exists('showEditOptions'),
            'isEditMode' => $this->adminService->isEditMode(),
            'totalTime' => $totalTime,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);
        $numberOfIngredientFields = count($recipe->ingredients) + 10;
        return view('recipes.edit', ['recipe' => $recipe, 'numberOfIngredientFields' => $numberOfIngredientFields]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $recipe = Recipe::find($id);

        $request->validate([
            'image' => 'mimes:png,jpg|max:2048'
        ]);

        $fileName = $recipe->image_path;
        if ($request->file()) {
            $fileName = $recipe->id . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads', $fileName, 'public');
        }

        $recipe->title = $request->get('title');
        $recipe->body = $request->get('body');
        $recipe->number = $request->get('number');
        $recipe->cooking_time = $request->get('cooking_time');
        $recipe->image_path = $fileName;
        $recipe->save();
        return redirect('/recipes/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
