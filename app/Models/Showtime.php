<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    use HasFactory;

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function mall()
    {
        return $this->belongsTo(Mall::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
