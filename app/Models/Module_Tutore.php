<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module_Tutore extends Model
{
    use HasFactory;

    public function user() {
        return $this->hasMany(User::class);
    }
    public function module() {
        return $this->hasMany(module::class);
    }
}
