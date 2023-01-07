<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    public function user() {
<<<<<<< Updated upstream
        return $this->hasOne(User::class);
=======
        return $this->hasMany(User::class);
>>>>>>> Stashed changes
    }

    public function inscriptons() {
        return $this->hasMany(inscription::class);
    }
}
