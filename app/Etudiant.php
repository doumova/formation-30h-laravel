<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classe;

class Etudiant extends Model
{
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'image_path',

    ];

    public function classe()
    {
        return $this->bilongsTo(Classe::class,'classe_id');
    }
}
