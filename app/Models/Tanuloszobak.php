<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanuloszobak extends Model
{
    /** @use HasFactory<\Database\Factories\TanuloszobakFactory> */
    use HasFactory;

    protected $table = 'tanuloszobak';
    protected $guarded = [];

    public function szobatipus() {
        return $this->belongsTo(Szobatipus::class, 'szobatipus_id');
    }
}
