<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = ['id'];

    public function hotel()
    {
        return $this->hasOne(Hotel::class);
    }
}
