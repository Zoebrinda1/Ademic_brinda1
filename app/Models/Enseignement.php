<?php

namespace App\Models;

use App\Models\Periode;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;

class Enseignement extends Model
{
    public function periodes()
    {
        return $this->hasMany(\App\Models\Periode::class);
    }
    public function etudiant()
    {
        return $this->belongsTo(\App\Models\Etudiant::class);
    }
}
