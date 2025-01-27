<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaLocal extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function locais()
    {
        return $this->hasMany(Local::class);
    }
}
