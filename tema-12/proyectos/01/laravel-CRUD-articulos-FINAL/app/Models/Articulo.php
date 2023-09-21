<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    protected $table = 'articulos';
    protected $fillable = [ 'id', 'descripcion', 'modelo', 'categoria_id',
                         'unidades', 'codigo', 'precio'];

    // Un Artículo, cuántas categorías puede tener asignada?
    // Solo 1 - por lo tanto el nombre del método va en singular
    // categoria()                        
    public function Categoria()
    {
        return $this->belongsTo(Categoria::class);
    } 
}
