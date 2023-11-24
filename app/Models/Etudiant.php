<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'number_inscription',
        'cin',
        'nom',
        'prenom',
        'gender',
        'date_naissance',
        'bac_image',
        'note',
        'specialite',
        'stauts',
    ];
}
