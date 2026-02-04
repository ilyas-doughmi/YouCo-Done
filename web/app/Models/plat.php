<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class plat extends Model
{
    protected $fillable = [
        'name',
        'description',
        'prix',
        'menuId',
    ];

    public function images()
    {
        return $this->morphMany(Image::class,'imageable');
    }
}
