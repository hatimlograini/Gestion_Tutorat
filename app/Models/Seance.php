<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    public function user() {
        return $this->hasMany(User::class);
    }

    public function inscriptons() {
        return $this->hasMany(inscription::class);
    }
}
