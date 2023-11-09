<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCorporal extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipocorporal', 'icone'
    ];

    protected $table = 'tipocorporal';

    public function combinacao()
    {
        return $this->hasMany(Combinacao::class, 'cod_tipocorporal');
    }
}
