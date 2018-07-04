<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class hanghoa extends Model
{
    //
    protected $table='hanghoas';
    protected $fillable=['id','mahang','tenhang','donvitinh','dongia','soluong','hinhanh','loaihang_id','created_at','updated_at'];
    public $timestamps=true;
    public function loaihangs()
    {
    	return $this->belongsTo('App\models\loaihang');
    }
    
}
