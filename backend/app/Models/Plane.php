<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    protected $fillable = ['name','airline_id','num_passengers','class'];

    public function classes($className = null)
    {

        $classes = [
            '' => 'Selecione uma Classe',
            'economic' => 'Economica',
            'businesswoman' => 'Executiva',
            'first_class' => 'Primeira Classe',
        ];

        if(!$className)
            return $classes;

        return $classes[$className];

    }
    public function airline()
    {
       return $this->belongsTo(Airline::class);
    }
}
