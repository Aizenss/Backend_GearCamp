<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tools extends Model
{
    protected $guarded = ['id'];

    public function rentals()
{
    return $this->belongsToMany(Rentals::class)->withPivot('quantity');
}

}
