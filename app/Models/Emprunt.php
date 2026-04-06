<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Emprunt extends Model
{
    protected $fillable =
    [
        'livre_id',
        'etudiant_id',
        'date_emprunt',
        'date_retour',
        'rendu'
    ];

    public function livre()
    {
        return $this->belongsTo(Livre::class, 'livre_id');
    }

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'etudiant_id');
    }
}
