<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\BookEdition;

class Book extends Model
{

    protected $appends = ['title', 'author', 'edition'];

    protected $with = ['editions'];

    public function getTitleAttribute()
    {
        return $this->editions()->latest('created_at')->first()->title;
    }

    public function getAuthorAttribute()
    {
        return $this->editions()->latest('created_at')->first()->author;
    }

    public function getEditionAttribute()
    {
        return $this->editions()->latest('created_at')->first()->edition;
    }

    public function editions() 
    {
        return $this->hasMany(BookEdition::class);

    }
}
