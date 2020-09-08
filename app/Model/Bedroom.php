<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bedroom extends Model
{
    protected $table = 'bedrooms';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nro', 'nro_beds', 'size_beds', 'floor', 'is_bath', 'price'
    ];

}
