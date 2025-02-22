<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    public function pago() {
        return $this->hasMany(Pago::class);
    }

    public function proyecto() {
        return $this->belongsToMany(Proyecto::class);
    }
}
