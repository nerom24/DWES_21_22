<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    protected $fillable = [ 'id', 'descripcion'];

    // Articulos - plural - porque una categoría se puede asignar
    // a varios artículos
    public function Articulos()
    {
        return $this->hasMany(Articulo::class);
    } 
    
}
