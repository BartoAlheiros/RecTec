<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pluviometria extends Model
{
	protected $table = 'pluviometrias';
    protected $primaryKey = "id";

     public function user(){
    	return $this->belongsTo('App\User', 'user_id');	
    }

    public function pluviometro(){
    	return $this->belongsTo('App\Models\Pluviometro', 'pluviometro_id');
    }
}
