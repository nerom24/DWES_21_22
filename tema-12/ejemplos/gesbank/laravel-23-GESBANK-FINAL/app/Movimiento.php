<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $table = "Movimientos";
    protected $fillable = ['cuenta_id','numMovimiento','fechaHora','tipo','concepto','cantidad', 'saldo'];


     public function cuenta()
	 {
	 return $this->belongsTo('App\Cuenta');
	 }

	 public function scopeSearch($query, $search) {

		return $query->where('id', 'LIKE', "%$search%")
					 ->orWhere('numMovimiento', 'LIKE', "%$search%")
					 ->orWhere('fechahora', 'LIKE', "%$search%")
					 ->orWhere('tipo', 'IN', "('I', 'R')")
					 ->orWhere('concepto', 'LIKE', "%$search%")
					 ->orWhere('cantidad', 'LIKE', "%$search%")
					 ->orWhere('saldo', 'LIKE', "%$search%")
					 ;
	}
}
