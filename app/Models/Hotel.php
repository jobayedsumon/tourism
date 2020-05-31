<?php

namespace App\Models;
use Trexology\ReviewRateable\Contracts\ReviewRateable;
use Trexology\ReviewRateable\Traits\ReviewRateable as ReviewRateableTrait;
use Illuminate\Database\Eloquent\Model;

class Hotel extends  Model implements ReviewRateable
{
    use ReviewRateableTrait;
    protected $guarded = ['id'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }


}


