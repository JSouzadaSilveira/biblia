<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traducao extends Model
{
    use HasFactory;

    protected $table = 'traducoes';
    protected $fillable = ['nome', 'abreviacao', 'idioma_id'];

    /**
     * Pegar todos os livros vinculados
     */
    public function idioma() {
        return $this->belongsTo(Idioma::class);
    }

    /**
     * Pegar todos os livros vinculados
     */
    public function livros() {
        return $this->hasMany(Livro::class);
    }

}
