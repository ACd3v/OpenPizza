<?php

namespace App\Http\Controllers;

use App\Category;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orders = Order::latest()->get();
        $users = User::latest()->get();

        // dd($orders);
        return view('orders.index', compact('orders', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $tot = Category::count();
        $categories = Category::all();
        $products = Product::all();

        return view('orders.create', ['categories' => $categories, 'products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validateOrder();

        // Creo l'oggetto Ordine che conterrà solo l'id dell'utente che svolge l'ordine
        $order = new Order(['user_id' => auth()->user()->id]);
        $order->save();

        // Prelevo i prodotti scelti nel form
        $resultsArray = request(['products_id']);

        // Creo un nuovo array vuoto dove inserirò solo gli id dei prodotti scelti
        $productsArray = [];

        // Il risultato della request erano 2 array uno dentro l'altro, con questo form estraggo solo gli id dei prodotti
        for ($i = 0; $i < count($resultsArray['products_id']); $i++) {
            array_push($productsArray, $resultsArray['products_id'][$i]);
        }

        // Aggiungo all'ordine i relativi prodotti nella pivot table
        $order->products()->attach($productsArray);

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    /**
     * @return array
     */
    protected function validateOrder(): array
    {
        return request()->validate([
            'products_id' => "required",
            'products_id.*' => "required|integer|min:1",
        ]);
    }
}
