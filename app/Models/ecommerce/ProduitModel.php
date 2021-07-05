<?php

namespace App\Models\ecommerce;

use Illuminate\Database\Eloquent\Model;

class ProduitModel extends Model
{
    //

    protected $table="prouduits";
    protected $primaryKey="id_prod";
    public $incrementing=true;
    protected $fillable=['produits_name','status','prix','image','categories'];
    public $timestamps=false;

}
