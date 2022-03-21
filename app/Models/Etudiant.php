<?php

namespace App\Models;

use App\Models\Delegue;
use App\Models\Enseignant;
use App\Models\Filiere_option;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    public function enseignant()
    {
        return $this->hasMany(\App\Models\Enseignant::class);
    }
    public function delegue()
    {
        return $this->hasMany(\App\Models\Delegue::class);
    }
    public function filiere_option()
    {
        return $this->belongsTo(\App\Models\Filiere_option::class);
    }
}
