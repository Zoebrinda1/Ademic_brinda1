<?php

namespace App\Models;

use App\Models\Statut;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    public function statut()
    {
        return $this->hasOne(\App\Models\Statut::class);
    }
    
}

