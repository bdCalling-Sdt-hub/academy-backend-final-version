<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Galleryr extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'image',
    ];
}
