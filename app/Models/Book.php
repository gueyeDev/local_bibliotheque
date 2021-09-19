<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Author;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author_id',
        'description',
        'date_of_publication',
    ];
    
    public function author(){

        return $this->belongsTo(Author::class);
    }

    public function image()
    {
    return $this->hasOne(Image::class);
    }
}