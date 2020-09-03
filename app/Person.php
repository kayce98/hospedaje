<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';
    
    protected $fillable = [
        'name', 'surname', 'dni'
    ];

    public function user(){
        return $this->hasMany('App\User');
    }
    
}
