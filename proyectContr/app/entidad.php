<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entidad extends Model
{
	protected $table = "entidades";

	protected fillable = ['nombre'
	,'responsable'
	,'email'];

    public function cuenta()
     {
        return $this->hashMany('App/cuenta');
     }
 public function municipio()
     {
        return $this->belongsTo('App/municipio');
     }
}
