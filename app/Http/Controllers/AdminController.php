<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AdminService;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view('recipes.list', ['recipes' => $recipes]);
    }

    public function toggleEditMode(Request $request, AdminService $adminService)
    {
        $adminService->toggleEditMode();
        return redirect($request->get('redirectUrl'));
    }
}
