<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikels';

    protected $fillable = [
        'image',
        'title',
        'content',
        'tags',
    ];
}
