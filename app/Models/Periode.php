<?php

namespace App\Models;

use App\Models\Enseignement;
use Illuminate\Database\Eloquent\Model;

class Periode extends Model
{
    public function enseignement()
    {
        return $this->belongsTo(\App\Models\Enseignement::class);
    }
}
