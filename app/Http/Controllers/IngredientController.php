<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;

class IngredientController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        return view('ingredients.create');
    }

    public function store()
    {
        $this->validateIngredient();
        $name = request('name');

        $ingredient = new Ingredient(['name' => $name]);
        $ingredient->save();

        return redirect(route('home'));
    }

    protected function validateIngredient(): array
    {
        return request()->validate([
            'name' => 'required'
        ]);
    }
}
