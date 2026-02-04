<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    protected $fillable = [
        'nom',
        'description',
        'userId',
        'categorie',
        'localisation',
        'capacite',
        'isActive',
        'isDelete',
    ];
    
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
