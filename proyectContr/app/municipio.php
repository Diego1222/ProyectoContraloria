<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
 	protected $table = "municipios";

 	protected fillable = ['nombre'];
 	  public function entidad()
     {
        return $this->hashMany('App/entidad');
     }

     public function departamento()
     {
     	return $this->belongsTo('App/departamento');
     }
}
