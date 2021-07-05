<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name',
	    'email',
	    'password',
	    'admin',
	    'NOM',
	    'PRENOM',
	    'ADRESSE',
	    'TELEPHONE',
	    'POINTSPIZZA',
	    'PHOTO',
	    'ID_ROLE'
    ];
    protected $primaryKey = 'id';
    protected $table="users_perso";


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public $timestamps=false;
	public function role(){
		return $this->belongsTo('App\Models\Livraison\Role','ID_ROLE','ID');
	}

	public function commandes(){
		return $this->hasMany('App\Models\Livraison\Commande','ID_USERS','id');
	}

	//Voir les clients fidèles
    public function scopeFidelite($query){
	    return $query->where('POINTSPIZZA','>=',25);
    }

}
