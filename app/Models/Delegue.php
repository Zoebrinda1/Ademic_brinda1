<?php

namespace App\Models;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;

class Delegue extends Model
{
    public function etudiannt()
    {
        return $this->belongsTo(\App\Models\Etudiant::class);
    }
}
