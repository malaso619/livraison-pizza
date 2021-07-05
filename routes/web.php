<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Livraison Pizza
Route::resources(
    [
        'cart'=>'livraison\CartController',
        'commande'=>'livraison\CommandeController',
        'ingredient'=>'livraison\IngredientController',
        'pays'=>'livraison\PaysController',
        'pizza'=>'livraison\PizzaController',
        'role'=>'livraison\RoleController',
        'utilisateur'=>'livraison\UtilisateurController',
        'vehicule'=>'livraison\VehiculeController',
        'ville'=>'livraison\VilleController'
    ]
);

Route::get('/',function(){

	$projet="Livraison Pizza";
	$author="Georges Nambinina";
	return view('welcome',compact('projet','author'));

})->name('path_home');

Route::get('/home-admin','livraison\CommandeController@index2')->name("path_admin");
Route::get('/commande-pizza','livraison\CommandeController@index')->name("commande");
Route::get('/cart','livraison\CartController@index')->name('cart_path');


//un site ecommerce simple avec laravel version 7
Route::get('/ecommerce','ecommerce\ClientController@home')->name('path_ecommerce');
Route::get('/cart','ecommerce\ClientController@cart')->name('cart');
Route::get('/login','ecommerce\ClientController@login')->name('login');
Route::get('/shop','ecommerce\ClientController@shop')->name('shop');
Route::get('/checkout','ecommerce\ClientController@checkout')->name('checkout');
Route::get('/signup','ecommerce\ClientController@signups');
Route::get('/select-par-categorie/{name}','ecommerce\ClientController@selectCategorie')->name('selectCategorie');
Route::get('/ajout-produit-au-panier/{id}','ecommerce\ClientController@ajoutPanier')->name('ajoutPanier');
Route::post('/modifier-quantite-panier/{id}','ecommerce\ClientController@modifierPanier')->name('modifierPanier');
Route::get('/retirer-produit-panier/{id}','ecommerce\ClientController@retirerPanier')->name('retirerPanier');

//dashbord
Route::get('/tableau-bord','ecommerce\AdminDashbordController@index')->name('tableau_bord');
Route::get('/list-commande','ecommerce\AdminDashbordController@liste_commande');

//Catégories
Route::get('/categorie','ecommerce\CategorieController@index')->name('path_cate');
Route::get('/edit-categorie/{id}','ecommerce\CategorieController@edit_cate')->name('edit_cate');
Route::get('/list-categorie','ecommerce\CategorieController@liste_categorie');
Route::post('/categorie','ecommerce\CategorieController@save_categorie')->name('sav_cate');
Route::post('/updated-categorie','ecommerce\CategorieController@misejour_categorie')->name('update_cate');
Route::get('/deleted-categorie/{id}','ecommerce\CategorieController@supprimer_categorie')->name('delete_cate');

//Produit
Route::get('/produit','ecommerce\ProduitController@index')->name('path_prod');
Route::get('/edit-produit/{id}','ecommerce\ProduitController@edit_prod')->name('edit_prod');
Route::get('/activation-status-produit/{id}','ecommerce\ProduitController@active_prod')->name('active_prod');
Route::get('/desactivation-status-produit/{id}','ecommerce\ProduitController@desactive_prod')->name('desactive_prod');
Route::get('/deleted-produit/{id}','ecommerce\ProduitController@delete_prod')->name('delete_prod');
Route::post('/updated-produit','ecommerce\ProduitController@update_prod')->name('update_prod');
Route::get('/list-produit','ecommerce\ProduitController@liste_produit');
Route::post('/produit','ecommerce\ProduitController@save_produit')->name('save_produit');


//slider
Route::get('/slider','ecommerce\SliderController@index')->name('path_slider');
Route::get('/list-slider','ecommerce\SliderController@liste_slider');
Route::post('/slider','ecommerce\SliderController@save_slider')->name('save_slider');
Route::post('/updated-slider','ecommerce\SliderController@updated_slider')->name('updated_slider');
Route::get('/edit-slider/{id}','ecommerce\SliderController@edit_slider')->name('edit_slider');
Route::get('/deleted-slider/{id}','ecommerce\SliderController@deleted_slider')->name('deleted_slider');
Route::get('/activation-status-slider/{id}','ecommerce\SliderController@activer')->name('activer');
Route::get('/desactivation-status-slider/{id}','ecommerce\SliderController@desactiver')->name('desactiver');

//Pour l'authentification laravel
Auth::routes();
Route::get('/admnistration-laravel-ecommerce', 'HomeController@index')->name('home_login_dashbord');
