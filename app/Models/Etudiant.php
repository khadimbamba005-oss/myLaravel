<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = [
        'numEtudiant',
        'nom',
        'prenom',
        'numTel',
        'email'
    ];

    public function emprunt()
    {
        return $this->hasMany(Emprunt::class , 'etudiant_id');
    }
}
