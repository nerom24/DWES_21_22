<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table = "Cuentas";
    protected $fillable = ['cliente_id','iban','saldo', 'numMvtos'];

    public function cliente()
	{
	 return $this->belongsTo('App\Cliente');
	}


	 public function movimientos()
	 {
	 return $this->hasMany('App\Movimiento');
	}

	public function scopeSearch($query, $search) {

		return $query->where('id', 'LIKE', "%$search%")
					 ->orWhere('iban', 'LIKE', "%$search%")
					 ->orWhere('saldo', 'LIKE', "%$search%")
					 ->orWhere('cliente_id', 'LIKE', "%$search%");
	}
}
