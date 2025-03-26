<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrack extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location'];

    // Relación con Company (Un cuartel tiene muchas compañías)
    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
