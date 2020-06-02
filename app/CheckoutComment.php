<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckoutComment extends Model
{
    protected $table = 'checkout_comments';
    protected $guarded = ['id'];
}
