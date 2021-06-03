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


Route::get('/', function () {
    return view('welcome');
});


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/',function(){

	$projet="Livraison Pizza";
	$author="Georges Nambinina";
	return view('welcome',compact('projet','author'));

})->name('path_home');

Route::get('/teste-foreignkey',function(){

	$role=App\User::findOrFail(2);//Pour voir les roles
	$user2=App\Models\Livraison\Role::findOrFail(3);

	$user=DB::select('
		select users_perso.name as anarana, r.ROLE from users_perso,role r where ID_ROLE=r.ID
		');
	//$user=App\Models\Livraison\Role::findOrFail(3);//Pour voir tout ce qui utilise ce role
	//return view('Livraison.index',compact('role','user','user2'));








	/*
	 * attach, detach and sync for manytomany on PizzaIngredient avec
	 * un tableau croisé dynamique*/

	$piz=\App\Models\Livraison\Pizza::find('Tropical');
	$pivot=\App\Models\Livraison\PizzaIngredient::find(1);
	//dd($pivot);
	//dd($piz);
	/*pour la table pivot : il ne prends pas en charge le de la table que vous avez ecrit dans
	le modele pivot dont soyez attentif à l'erreur

	Le 9 est l'id de l'ingredient

	$piz->ingredients()->attach(9,['NOMPIZZA'=>'Fruit-de-Mer']);
	$piz->ingredients()->attach(5,['NOMPIZZA'=>'Tropical']);
	*/

	//Pour acceder à la table pivot :

//	foreach ($piz->ingredients as $ingredient){
//
//		return $ingredient->pivot->ID;
//	}


	$req2=DB::select('
		select i.INGREDIENTS,
			p.NOMPIZZA,
			p.PRIX 
			from pizza p,ingredient i, pizzaingredient pp 
			where 
			pp.ID=i.ID and pp.NOMPIZZA=p.NOMPIZZA
		');



	/*App\Models\Livraison\Commande::create([
		'NUMCOMMANDE'=>'cmd-2022',
		'ID_TARIF'=>'PM',
		'ID_PAYS'=>1,
		'ID_PIZZA'=>'Tropical',
		'ID_USERS'=>21,
		'ID_VEHICULE'=>'md-2363',
		'ID_VILLE'=>1,
		'DATECOMMANDE'=>'2021-04-10',
		'LATITUDE'=>'874542,82',
		'LONGITUDE'=>'22568,56',
		'ADRESSEONE'=>'Tana',
		'ADRESSETWO'=>'aucun',
		'RETARD'=>false,
	]);*/
	//dd($req2);
	//return view('Livraison.index',compact('role','user','user2','piz'));
	$testes=\App\Models\Livraison\Commande::get();

	/*foreach ($testes as $val){
		return "<p>".$val->tarif->COEFFICIENT."</p>";
	}*/

	return view('Livraison.index',compact('role','user','user2','piz','testes'));



})->name('teste_path');

Route::get('/home-admin','livraison\CommandeController@index2')->name("path_admin");
Route::get('/commande-pizza','livraison\CommandeController@index')->name("commande");
//Route::resource('/cart','livraison\CartController');
Route::get('/cart','livraison\CartController@index')->name('cart_path');


//Apprendre à créer un site ecommerce simple avec laravel version 7
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
Route::get('/categorie','ecommerce\CategorieController@index');
Route::get('/edit-categorie/{id}','ecommerce\CategorieController@edit_cate')->name('edit_cate');
Route::get('/list-categorie','ecommerce\CategorieController@liste_categorie');
Route::post('/categorie','ecommerce\CategorieController@save_categorie')->name('sav_cate');
Route::post('/updated-categorie','ecommerce\CategorieController@misejour_categorie')->name('update_cate');
Route::get('/deleted-categorie/{id}','ecommerce\CategorieController@supprimer_categorie')->name('delete_cate');

//Produit
Route::get('/produit','ecommerce\ProduitController@index');
Route::get('/edit-produit/{id}','ecommerce\ProduitController@edit_prod')->name('edit_prod');
Route::get('/activation-status-produit/{id}','ecommerce\ProduitController@active_prod')->name('active_prod');
Route::get('/desactivation-status-produit/{id}','ecommerce\ProduitController@desactive_prod')->name('desactive_prod');
Route::get('/deleted-produit/{id}','ecommerce\ProduitController@delete_prod')->name('delete_prod');
Route::post('/updated-produit','ecommerce\ProduitController@update_prod')->name('update_prod');
Route::get('/list-produit','ecommerce\ProduitController@liste_produit');
Route::post('/produit','ecommerce\ProduitController@save_produit')->name('save_produit');


//slider
Route::get('/slider','ecommerce\SliderController@index');
Route::get('/list-slider','ecommerce\SliderController@liste_slider');
Route::post('/slider','ecommerce\SliderController@save_slider')->name('save_slider');
Route::post('/updated-slider','ecommerce\SliderController@updated_slider')->name('updated_slider');
Route::get('/edit-slider/{id}','ecommerce\SliderController@edit_slider')->name('edit_slider');
Route::get('/deleted-slider/{id}','ecommerce\SliderController@deleted_slider')->name('deleted_slider');
Route::get('/activation-status-slider/{id}','ecommerce\SliderController@activer')->name('activer');
Route::get('/desactivation-status-slider/{id}','ecommerce\SliderController@desactiver')->name('desactiver');


//Test des view sans recours au controlleurs

Route::view('/descri','ecommerce/pages/dashbord/slider');
Route::view('/datatable','ecommerce/pages/dashbord/ListeData/produit');







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
