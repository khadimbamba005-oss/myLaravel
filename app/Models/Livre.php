<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Livre extends Model
{
    protected $fillable = [
        'titre',
        'auteur',
        'annee_pub',
        'num_ref',
        'quantite'

    ];

    public function emprunt()
    {
        return $this->hasMany(Emprunt::class , 'livre_id');
    }
}
