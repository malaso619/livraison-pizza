<?php

namespace App\Models\TEACHER;

use App\Models\Traits\{SlugCreating,SlugRoute};
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class EventBroteModel extends Model
{
    //

	/*
	 * Pour gerer l'unicité de slug veuillez
	 * installer le librairie sur composer eloquent-sluggable
	 * */




	/*
	 * Le dossier Trait permet de partager les fonction en commun des model eloquent pour eviter les duplication des
	 * codes partout
	 *
	 *
	 * ----------
	 *
	 *
	 * Grace aux Event Eloquent comme :creating ,created ,.... voir la documentation
	 * nous permet faire inserer le slug automatique grace à ce evenement de l'eloquent
	 *
	 * ----------
	 *
	 *
	 * C'est très puissant*/
	use SlugRoute,SlugCreating;
	protected $table="eventbrote";
	protected $primaryKey="id";
	protected $fillable=['titre','description','lieu','date_event','time_event'];//'slug'
	public $timestamps=false;
	protected $dates=['date_event'];


	//public function getRouteKeyName()//ceci permet de recuperer id dans le paramètre d route
	//{
		//return parent::getRouteKey();
		//Maintenant noous allons utiliser le slug comme identifiant
		//dont le par défaut est le primaryKey="id"
		//A present faut maintenant changer ou pas id car il reconnait automatiquement

		//return 'slug';

	//}

	/*
	 * Le fonction Boot nous permet d'utiliser l'event eloquent
	 * Dont si vous avez utiliser d'autre boot faire ceci bootAutre pour ne eviter
	 * la redefinition de ce methode
	 * */
	protected static function boot()
	{
		parent::boot(); // TODO: Change the autogenerated stub

		/*static::creating(function($event_brote){
			$event_brote->slug=Str::slug($event_brote->titre);
		});*/
		static::updating(function($event_brote){
			$event_brote->slug=Str::slug($event_brote->titre);
		});
	}
}