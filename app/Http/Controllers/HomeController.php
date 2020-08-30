<?php

namespace App\Http\Controllers;

use App\User;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // if (Auth::check()) {
        //     if (auth()->user()->role == 'admin') {
        //         return view('admin.home');
        //     } elseif (auth()->user()->role == 'user') {
        //         return view('user.home');
        //     } else {
        //         // return view('auth.login');
        //         abort(404, 'Pagina non trovata');
        //     }
        // } else {
        //     return view('auth.login');
        // }
    }
}
