<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\CategorieModel;
use App\Models\ecommerce\ProduitModel;
use App\Models\ecommerce\SliderModel;
use App\Cart\Cart;
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
        if(!Session::has('cart')){
            view('ecommerce.pages.cart');
        }
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        return view('ecommerce.pages.cart', ['products' => $cart->items]);

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
        if(!Session::has('cart')){
            view('ecommerce.pages.cart');
        }

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
        $cart = new Cart($oldCart);
        $cart->add($pros, $id);
        Session::put('cart', $cart);
        //dd(Session::get('cart'));
        return redirect('/shop');


    }

    public function modifierPanier($id,Request $request){

        //print('the product id is '.$request->id.' And the product qty is '.$request->quantity);
        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->updateQty($id, $request->quantity);//$request->(quantity) est le name de l'input de type number
        Session::put('cart', $cart);

        //dd(Session::get('cart'));
        return redirect('/cart');

    }

    public function retirerPanier($id){

        $oldCart = Session::has('cart')? Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }
        else{
            Session::forget('cart');
        }
        //dd(Session::get('cart'));
        return redirect('/cart');

    }
}
