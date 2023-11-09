<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    protected $table = 'peca';
    protected $fillable = ['cod_comb', 'desc_peca', 'preco_peca', 'img_peca', 'link_peca'];

    public function combinacao()
    {
        return $this->belongsTo(Combinacao::class, 'cod_comb');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

}