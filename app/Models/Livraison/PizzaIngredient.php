<?php

namespace App\Models\Livraison;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PizzaIngredient extends Pivot
{
    //
	protected $table="pizzaingredient";
	protected $primaryKey="id_pivot";
	protected $fillable=[
		'ID',
		'NOMPIZZA',
		];
	public $incrementing=true;

}
