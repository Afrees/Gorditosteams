<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class companies extends Model
{
    use HasFactory;

    protected $fillable = ['activity', 'barrack_id'];

    // Relación: Una compañía pertenece a un cuartel (barrack)
    public function barrack()
    {
        return $this->belongsTo(Barrack::class);
    }
}