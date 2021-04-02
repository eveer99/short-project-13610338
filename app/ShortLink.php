<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShortLink extends Model
{
    protected $fillable = [ 'LongURL', 'ShortURL' ];

    protected $guarded = [];

    public static function create($input)
    {
    }
}
