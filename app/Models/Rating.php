<?php

namespace App\Models;

use Trexology\ReviewRateable\Contracts\ReviewRateable;
use Trexology\ReviewRateable\Traits\ReviewRateable as ReviewRateableTrait;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model implements ReviewRateable
{
    use ReviewRateableTrait;
}