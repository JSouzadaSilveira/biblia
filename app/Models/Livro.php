<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'posicao', 'abreviacao', 'testamento_id'];
    
    /**
     * Pegar o testamento
     */
    public function testamento() {
        return $this->belongsTo(Testamento::class);
    }

    /**
     * Pegar todos os livros vinculados
     */
    public function versiculos() {
        return $this->hasMany(Versiculo::class);
    }
}
