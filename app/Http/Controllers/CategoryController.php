<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();

        return view('categories.index', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    public function store()
    {
        $this->validateCategory();

        Category::create([
            'name' => request('name')
        ]);

        return redirect(route('index.category'));
    }

    public function edit(Category $category)
    {
        // $categories = Category::all();
        // $ingredients = Ingredient::all();

        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $this->validateCategory();
        // dd($request->all());

        $category->update(['name' => $request->name]);

        return redirect(route('index.category'));
    }

    /**
     * @return array
     */
    protected function validateCategory(): array
    {
        return request()->validate([
            'name' => 'required'
        ]);
    }
}
