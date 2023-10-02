<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocasiao extends Model
{
    use HasFactory;

    protected $table = 'ocasioes'; // Defina o nome da tabela se não seguir a convenção do Laravel

    // Se você deseja definir relacionamentos, pode fazê-lo aqui
    public function combinacoes()
    {
        return $this->hasMany(Combinacao::class, 'cod_ocasiao');
    }
}
