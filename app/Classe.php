<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    // protected $fillable = [
    //     'nom',
    //     'description',
    // ];

    public function etudiants()
    {
        return $this->hasMany(Eudiant::class);
    }
    public function universites()
    {
        return $this->belongsTo(Universite::class, 'universites_id');
    }
}
