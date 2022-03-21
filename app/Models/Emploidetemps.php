<?php

namespace App\Models;

use App\Models\Filiere_option;
use Illuminate\Database\Eloquent\Model;

class Emploidetemps extends Model
{
    public function filiere_option()
    {
        return $this->hasOne(\App\Models\Filiere_option::class);
    }
}
