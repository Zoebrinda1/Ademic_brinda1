<?php

namespace App\Models;

use App\Models\Cahierdetexte;
use Illuminate\Database\Eloquent\Model;

class Devoir extends Model
{
    public function cahierdetexte()
    {
        return $this->belongsTo(\App\Models\Cahierdetexte::class);
    }
}
