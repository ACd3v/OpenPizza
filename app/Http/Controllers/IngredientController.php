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
        //
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

        return redirect(route('home'));
    }

    protected function validateIngredient(): array
    {
        return request()->validate([
            'name' => 'required'
        ]);
    }
}
