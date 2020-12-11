<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $timestamp = false;

    protected $fillable = [
        'name','description',
    ];
}
