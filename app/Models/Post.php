<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['image', 'title', 'content'];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn ($image) => asset('storage/post' . $image),
        );
    }
}
