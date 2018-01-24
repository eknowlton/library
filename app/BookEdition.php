<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookEdition extends Model
{
    protected $fillable = [
        'title',
        'author',
        'edition'
    ];
}
