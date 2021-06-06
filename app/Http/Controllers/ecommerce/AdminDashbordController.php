<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminDashbordController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('ecommerce.pages.corona.index');
    }
    public function liste_commande(){
        return view('ecommerce.pages.corona.ListeData.commande');
    }
}
