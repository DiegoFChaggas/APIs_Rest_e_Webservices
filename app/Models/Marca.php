<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    /** @use HasFactory<\Database\Factories\MarcaFactory> */
    use HasFactory;
    protected $fillable = ['nome', 'imagem'];

    public function modelos(){
        //Uma marca possui muitos modelos
        return $this->hasMany('App\Models\Modelo');
    }
}
