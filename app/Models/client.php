<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'password',
    ];

    protected $key = 'client_id';

    public function trajets()
    {
        return $this->hasMany(trajet::class);
    }
}

?>