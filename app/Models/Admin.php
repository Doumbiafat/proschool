<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Admin extends Model
{
    use HasFactory,HasFactory, Notifiable;
    protected $fillable = ['id_admin']; // Champ à remplir lors de la création d'un enregistrement dans la table "admins"

    public function user()
    {
        return $this->belongsTo(User::class, 'id_admin');
    }

}
