<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        return view('ecommerce.pages.home');
    }
    public function cart(){
        return view('ecommerce.pages.cart');
    }
    public function login(){
        return view('ecommerce.pages.login');
    }
    public function shop(){
        return view('ecommerce.pages.shop');
    }
    public function checkout(){
        return view('ecommerce.pages.checkout');
    }
    public function signups(){
        return view('ecommerce.pages.signup');
    }
}
