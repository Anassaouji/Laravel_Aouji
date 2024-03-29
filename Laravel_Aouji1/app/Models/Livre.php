<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;
    protected $fillable=[
        "titre","date_publication","prix"
    ];
    public function auteur()
    {
        return $this->belongsTo(Auteur::class);
    }
}
