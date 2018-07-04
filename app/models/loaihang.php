<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class loaihang extends Model
{
    //
    protected $table='loaihangs';
    protected $fillable=['id','tenloai','created_at','updated_at'];
    public $timestamps=true;
    public function hanghoas()
    {
        return $this->hasMany('App\models\hanghoa');
    }
}
