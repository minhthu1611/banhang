<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends Authenticatable
{
    //
    protected $table='admins';
    protected $fillable=['id','username','password','hoten','gioitinh','diachi','created_at','updated_at'];
	public $timestamps = true;
}
