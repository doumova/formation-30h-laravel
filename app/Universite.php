<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Universite extends Model
{
    use  HasFactory;
    // protected $fillable = [
    //     'libelle',
    //     'description',
    // ];

    public function universites()
    {
        return $this->hasMany(Classes::class);
    }
}
