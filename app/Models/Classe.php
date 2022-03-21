<?php

namespace App\Models;

use App\Models\Filiere_option;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    public function filiere_option()
    {
        return $this->hasMany(\App\Models\Filiere_option::class);
    }
}
