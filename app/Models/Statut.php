<?php

namespace App\Models;

use App\Models\Enseignant;
use Illuminate\Database\Eloquent\Model;

class Statut extends Model
{
    public function enseignant()
    {
        return $this->belongsTo(\App\Models\Enseignant::class);
    }
}
