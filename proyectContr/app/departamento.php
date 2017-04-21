<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    public function municipio()
     {
     	return $this->hashMany('App/municipio');
     }
}
