<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    /** @use HasFactory<\Database\Factories\ModeloFactory> */
    use HasFactory;
    protected $fillable = ['marca_id', 'nome', 'imagem', 'numero_portas', 'lugares', 'air_bag', 'abs'];

    public function marca(){
        //Um modelo pertence a uma marca
        return $this->belongsTo('App\Models\Marca');
    }
}
