<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combinacao extends Model
{
    protected $fillable = [
        'cod_estilo', 'cod_tipocorporal', 'cod_ocasiao', 'img_comb', 'link_comb', 'oca_esp',
    ];

    public function pecas()
    {
        return $this->hasMany(Peca::class, 'cod_comb');
    }

    public function ocasiao()
    {
        return $this->belongsTo(Ocasiao::class, 'cod_ocasiao');
    }
}