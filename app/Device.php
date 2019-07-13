<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{

	protected $fillable = ['localization','status','TimeActive','fullTimeIrrigation'];

	public function getModelAttribute($value){
		return strtoupper($value);
	}

	public function getStatusAttribute($value){
		if($value == "E"){
			return "Enabled";
		}else if($value == "D"){
			return "Desabled";
		}
	}

   public static function status(){
   	return['Enabled','Desabled'];
   }



    }
