<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "Clientes";
    protected $fillable = ['apellidos', 'nombre', 'telefono', 'ciudad', 'dni', 'email'];

    public function cuentas()
 	{
 		return $this->hasMany('App\Cuenta');
	}

	public function scopeSearch($query, $search) {

		return $query->where('nombre', 'LIKE', "%$search%")
					 ->orWhere('apellidos', 'LIKE', "%$search%")
					 ->orWhere('ciudad', 'LIKE', "%$search%")
					 ->orWhere('email', 'LIKE', "%$search%")
					 ->orWhere('dni', 'LIKE', "%$search%")
					 ->orWhere('telefono', 'LIKE', "%$search%");
	}

   
}
