<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Szobatipusok extends Model
{
    /** @use HasFactory<\Database\Factories\SzobatipusokFactory> */
    use HasFactory;
    
    protected $table = 'szobatipusok';
    protected $guarded = [];

    public function tanuloszobak() {
        return $this->hasMany(Tanuloszoba::class, 'szobatipus_id');
    }
}
