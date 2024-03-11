<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
        // Nom de la table associée au modèle
        protected $table = 'classes';

        // Les colonnes que vous pouvez remplir avec la méthode create
        protected $fillable = ['libelle'];
}
