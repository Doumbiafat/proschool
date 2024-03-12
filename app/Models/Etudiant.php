<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Etudiant extends Model
{

    use HasFactory,HasFactory, Notifiable;
    protected $fillable = ['id_etudiant','classe_id', 'matricule','notes'];


    public function user()
    {
        return $this->belongsTo(User::class, 'id_etudiant');
    }
    public function classe()
    {
        return $this->belongsTo(Classe::class, 'classe_id');
    }
}
