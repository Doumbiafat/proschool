<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
        use HasFactory;

        protected $fillable = [
            'parent_id',
            'etudiant_id',
        ];

        // Si vous souhaitez ajouter des relations, vous pouvez le faire ici
        public function etudiant()
        {
            return $this->belongsTo(Etudiant::class,'etudiant_id',);
        }

        /**
         * Obtenez l'utilisateur parent associé à ce parent.
         */
        public function user()
        {
            return $this->belongsTo(User::class, 'parent_id');
        }
    }
