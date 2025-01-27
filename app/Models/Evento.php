<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = 'eventos';

    protected $fillable = [
        'nome',
        'descricao',
        'local',
        'quantidade_pessoas',
        'data_inicio',
        'data_fim',
        'imagem',
        'status',
        'user_id',
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    public function ingressos()
    {
        return $this->hasMany(Ingresso::class);
    }

    
    public function compras()
    {
        return $this->hasMany(Compra::class);
    }

    
}
