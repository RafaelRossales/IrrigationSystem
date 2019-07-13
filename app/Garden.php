<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garden extends Model
{
    protected $fillable = ['plants_id','devices_id','local','humid'];

    public function plant(){
    	return $this->hasMany('App\plants');
    }

    public function device(){
    	return $this->hasMany('App\Device');
    }



}
