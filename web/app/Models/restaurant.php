<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\User;

class restaurant extends Model
{
    protected $table = 'restaurant';
    protected $fillable = [
        'nom',
        'description',
        'userId',
        'categorie',
        'localisation',
        'capacite',
        'isActive',
        'isDeleted',
    ];
    protected $casts = [
        'isActive' => 'boolean',
        'isDeleted' => 'boolean',
        'capacite' => 'integer',
    ];
    
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
