<?php

namespace App\Models\ecommerce;

use Illuminate\Database\Eloquent\Model;

class CategorieModel extends Model
{
    //
    protected $table="categories";
    protected $primaryKey="id_cate";
    public $incrementing=true;
    protected $fillable=['categories'];
    public $timestamps=false;
}
