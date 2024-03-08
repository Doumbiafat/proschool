<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory,HasFactory, Notifiable;
    protected $fillable = ['id_enseignant', 'matiere'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_enseignant');
    }
}
