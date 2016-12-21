<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    //
    protected $fillable = [
        'name', 'image', 'created_at'
    ];

}
