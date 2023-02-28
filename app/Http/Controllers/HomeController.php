<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Produit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
   /* public function __construct()
    {
        $this->middleware(['auth','verified']);
    }*/

    public function index() 
    {
        if(Auth::check()){
        $prod = Produit::count();
        $user = User::count();
        $cat = Categorie::count();
        return view('home.index', compact('prod','user','cat'));
        }
        return redirect("login")->withSuccess("Oups ! Vous n'avez pas accès");
    }
}