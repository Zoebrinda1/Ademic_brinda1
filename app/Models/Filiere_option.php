<?php

namespace App\Models;

use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Cahierdetexte;
use App\Models\Emploidetemps;
use Illuminate\Database\Eloquent\Model;

class Filiere_option extends Model
{
    public function etudiant()
    {
        return $this->hasMany(\App\Models\Etudiant::class);
    }
    public function classes()
    {
        return $this->belongsTo(\App\Models\Classe::class);
    }
    public function emploidetemps()
    {
        return $this->belongsTo(\App\Models\Emploidetemps::class);
    }
    public function cahierdetexte()
    {
        return $this->belongsTo(\App\Models\Cahierdetexte::class);
    }


}
