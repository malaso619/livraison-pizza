<?php

namespace App\Models\ecommerce;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    protected $table="slider";
    protected $primaryKey="id_slider";
    public $incrementing=true;
    protected $fillable=['titre','description','status','image'];
    public $timestamps=false;
}
