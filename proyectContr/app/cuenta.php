<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuenta extends Model
{
    protected $table = "cuentas";
    protected fillable = ['tipo_cuenta',
    'fecha_notificacion',
     'fecha_respuesta',
     'fecha_N_aviso',
     'intancia',
     'fecha',
     'n_r_informe_observacion',
     'n_r_fenecido',
     'n_r_sancionada'];

     public function user()
     {
     	return $this->belongsTo('App/User');
     }

     public function entidad()
     {
        return $this->belongsTo('App/entidad');
     }
}
