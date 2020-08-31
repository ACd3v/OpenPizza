<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;

class IngredientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ingredients = Ingredient::all();

        return view('ingredients.index', compact('ingredients'));
    }

    public function create()
    {
        return view('ingredients.create');
    }

    public function store()
    {
        $this->validateIngredient();

        Ingredient::create([
            'name' => request('name')
        ]);

        return redirect(route('index.ingredient'));
    }

    public function edit(Ingredient $ingredient)
    {
        return view('ingredients.edit', compact('ingredient'));
    }

    public function update(Request $request, Ingredient $ingredient)
    {
        $this->validateIngredient();
        // dd($request->all());

        $ingredient->update(['name' => $request->name]);

        return redirect(route('index.ingredient'));
    }

    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();

        return back();
    }

    protected function validateIngredient(): array
    {
        return request()->validate([
            'name' => 'required'
        ]);
    }
}
