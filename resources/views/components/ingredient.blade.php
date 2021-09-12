@props(['ingredient' => null])
@php dd($ingredient); @endphp
<div class="mt-4 sm:flex">
    <x-label for="ingredient-name" :value="__('Navn')" />
    <x-input id="ingredient-name" class="block mt-1 w-1/2" type="text" name="name" value="{{$ingredient->name}}" required />
</div>
<div class="mt-4 sm:flex">
    <x-label for="ingredient-amount" :value="__('Mængde')" />
    <x-input id="ingredient-amount" class="block mt-1 w-1/7" type="text" name="amount" value="{{$ingredient->amount}}" required />
</div>
<div class="mt-4">
    <x-label for="ingredient-type" :value="__('Type (g, kg, l etc)')" />
    <x-input id="ingredient-type" class="block mt-1 w-1/7" type="text" name="type" value="{{$ingredient->type}}" required />
</div>

<input type="text" name="order" value="1"/>

