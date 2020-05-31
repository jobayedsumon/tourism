<?php

namespace App\Models;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded=[];

    public function hotels()
    {
        return $this->hasMany(Hotel::class,'hotels_id');
    }
}
