<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rentals extends Model
{
    protected $guarded = ['id'];

    public function tools()
{
    return $this->belongsToMany(Tools::class)->withPivot('quantity');
}
}
