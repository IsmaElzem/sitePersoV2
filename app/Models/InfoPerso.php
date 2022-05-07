<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoPerso extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'localisation',
        'hobbies',
        'points_forts',
        'aPropos',
        'raisonSite',
    ];

    /**
     * Récupérer le role de l'user.
     */
    public function user()
    {
        return $this->hasOne(Role::class);
    }

}
