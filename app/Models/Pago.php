<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    public function colaborador() {
        return $this->belongsTo(colaborador::class);
    }

    public function tipoPago() {
        return $this->belongsTo(TipoPago::class);
    }
}
