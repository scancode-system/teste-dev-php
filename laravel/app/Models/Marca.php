<?php

namespace App\Models;

use App\Models\Carro;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Marca extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    public function carros()
    {
        return $this->hasMany(Carro::class);
    }
}
