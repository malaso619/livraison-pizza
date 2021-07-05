<?php

namespace App\Models\Livraison;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    //
	protected $table="ingredient";
	protected $primaryKey="ID";
	public $incrementing=true;
	protected $fillable=[
		'INGREDIENTS',
		];
	public $timestamps=false;

	public function pizzas(){
		return $this->belongsToMany('App\Models\Livraison\Pizza',
            'pizzaingredient',
            'ID','NOMPIZZA');
	}

}
