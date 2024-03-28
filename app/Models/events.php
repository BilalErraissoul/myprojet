<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom_event',
        'Description_event',
        'Date_event',
        'image',
    ];
    public function getImageAttribute($value){
        return $value??'acceuil/logo.png';
    }
}
