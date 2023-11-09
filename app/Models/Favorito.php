<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    use HasFactory;

    protected $table = 'favorito';

    protected $fillable = ['user_id', 'combinacao_id'];

    public function combinacao()
    {
        return $this->belongsTo(Combinacao::class, 'combinacao_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
