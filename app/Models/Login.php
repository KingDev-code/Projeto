<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class Login extends Model implements Authenticatable
{
    use AuthenticableTrait, HasFactory;

    protected $table = 'login'; // Usar o nome correto da tabela 'login'
    protected $fillable = [
        'email',
        'senha',
        'type',
    ];

    protected $hidden = [
        'senha',
        'remember_token',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'login_id', 'id');
    }

    public function empresa()
    {
        return $this->hasOne(Empresa::class, 'login_id', 'id');
    }

    public function admin()
    {
        return $this->hasOne(Admin::class, 'login_id', 'id');
    }
}
