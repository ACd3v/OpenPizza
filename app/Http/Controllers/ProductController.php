<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Ingredient;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        $ingredients = Ingredient::all();

        return view('products.create', compact('categories', 'ingredients'));
    }

    public function store()
    {
        $this->validateProduct();

        $category = request('category_id')[0];
        $name = request('name');

        $product = new Product(['category_id' => $category, 'name' => $name]);
        $product->save();

        $product->ingredients()->attach(request('ingredients_id'));

        return redirect(route('home'));
    }

    protected function validateProduct(): array
    {
        return request()->validate([
            'category_id' => 'required',
            // 'ingredients_id' => 'required',
            'name' => 'required'
        ]);
    }
}
