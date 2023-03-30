<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chauffeurs extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'marque',
        'plaque',
        'email',
        'password',
    ];
}
