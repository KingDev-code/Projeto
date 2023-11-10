<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combinacao extends Model
{
    protected $table = 'combinacao';
    protected $fillable = [
        'cod_estilo', 'cod_tipocorporal', 'cod_ocasiao', 'img_comb', 'link_comb', 'oca_esp',
    ];

    public function favoritadoPor()
    {
        return $this->hasMany(Favorito::class, 'combinacao_id');
    }

    public function pecas()
    {
        return $this->hasMany(Peca::class, 'cod_comb');
    }

    public function ocasiao()
    {
        return $this->belongsTo(Ocasiao::class, 'cod_ocasiao');
    }

    public function tipocorporal()
    {
        return $this->belongsTo(TipoCorporal::class, 'cod_tipocorporal');
    }

    public function estilo()
    {
        return $this->belongsTo(Estilo::class, 'cod_estilo', 'cod_estilo');
    }
}