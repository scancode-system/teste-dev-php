<?php

namespace App\Models;

use App\Models\Marca;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carro extends Model
{
    use HasFactory;

    protected $fillable = ['marca_id', 'modelo', 'ano'];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }

}
