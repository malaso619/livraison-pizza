<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\CategorieModel;
use App\Models\ecommerce\ProduitModel;
use App\Models\ecommerce\SliderModel;
use App\Cart;
use Session;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function home(){
        $slider=SliderModel::where('status',1)->get();
        $prod=ProduitModel::where('status',1)->get();
        return view('ecommerce.pages.home',compact('slider','prod'));
    }
    public function cart(){
        return view('ecommerce.pages.cart');
    }
    public function login(){
        return view('ecommerce.pages.login');
    }
    public function shop(){
        $prods=ProduitModel::where('status',1)->get();
        $cat=CategorieModel::all();
        return view('ecommerce.pages.shop',compact('prods','cat'));
    }
    public function checkout(){
        return view('ecommerce.pages.checkout');
    }
    public function signups(){
        return view('ecommerce.pages.signup');
    }

    public function selectCategorie($name){
        $prods=ProduitModel::where('categories','=',$name)
                            ->where('status',1)
                            ->get();
        $cat=CategorieModel::all();

        return view('ecommerce.pages.shop')->withProds($prods)->withCat($cat);
    }

    public function ajoutPanier($id){

        $pros=ProduitModel::find($id);
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart\Cart($oldCart);
        $cart->add($pros, $id);
        Session::put('cart', $cart);
        dd(Session::get('cart'));


    }
}
