<?php

namespace App\Http\Controllers;

use App\User;
use Error;
use Illuminate\Http\Request;

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
        // Prelevo l'id dell'utente loggato
        $id = auth()->user()->id;

        // Ricavo il ruolo che corrisponde a quell'id
        $role = User::find($id)->role;

        if ($role == 'admin') {
            return view('admin.home');
        }

        if ($role == 'user') {
            return view('user.home');
        } else {
            abort(404, 'Pagina non trovata');
        }
    }
}
