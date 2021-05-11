<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public function genre() {
        return $this->belongsTo(Genre::class);
    }
    public function role() {
        return $this->belongsTo(Role::class);
    }
    public function team() {
        return $this->belongsTo(Team::class);
    }
}
