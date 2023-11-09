<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Empresa extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'empresa';

    protected $fillable = ['login_id', 'nome', 'resp', 'cnpj', 'telefone', 'data_fundacao', 'img_empresa'];

    public function login()
    {
        return $this->belongsTo(Login::class, 'login_id');
    }

    public function pecas()
    {
        return $this->hasMany(Peca::class, 'empresa_id');
    }

    
}
