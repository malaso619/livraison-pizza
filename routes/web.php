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
Route::get('/ecommerce',function(){
    return view('ecommerce.pages.home');
})->name('path_ecommerce');

Route::get('/cart','ecommerce\ClientController@cart');
Route::get('/login','ecommerce\ClientController@login');
Route::get('/shop','ecommerce\ClientController@shop');
Route::get('/checkout','ecommerce\ClientController@checkout');
Route::get('/signup','ecommerce\ClientController@signups');







