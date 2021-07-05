<?php

namespace App\Models\Livraison;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

	protected $table="role";
	protected $primaryKey="ID";
	protected $fillable=[
		'ROLE'
		];
	public $timestamps=false;
	public function users(){
		return $this->hasMany('App\User','ID_ROLE','ID');
	}

}
