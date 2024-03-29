<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auteur extends Model
{
    use HasFactory;
    protected $fillable=[
        "nom",
        "date_naissance",
    ];
    public function livres()
    {
        return $this->hasMany(Livre::class);
    }
}
