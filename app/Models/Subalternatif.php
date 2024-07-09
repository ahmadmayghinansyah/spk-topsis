<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subalternatif extends Model
{
    use HasFactory;

    protected $fillable = ['alternatif_id', 'kriteria_id', 'nilai'];
}
