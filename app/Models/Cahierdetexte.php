<?php

namespace App\Models;

use App\Models\Devoir;
use App\Models\Filiere_option;
use Illuminate\Database\Eloquent\Model;

class Cahierdetexte extends Model
{
    public function filiere_option()
    {
        return $this->hasOne(\App\Models\Filiere_option::class);
    }
    public function devoirs()
    {
        return $this->hasMany(\App\Models\Devoir::class);
    }
}
