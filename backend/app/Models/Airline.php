<?php

namespace App\Models;
use App\Models\Plane;

use Illuminate\Database\Eloquent\Model;

class Airline extends Model
{
    protected $fillable = ['name'];

    public function planes(){
        return $this->hasMany(Plane::class);
    }
}
