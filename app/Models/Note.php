<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
   use HasFactory;

    protected $fillable = ['etudiant_id', 'math', 'physique', 'anglais'];

    protected $casts = [
        'math' => 'array',
        'physique' => 'array',
        'anglais' => 'array',
    ];



}
