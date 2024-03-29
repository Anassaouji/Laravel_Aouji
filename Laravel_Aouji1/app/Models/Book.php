<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title',
        'publication_date',
        'number_of_pages',
        'publisher',
        'description',
    ];
}

