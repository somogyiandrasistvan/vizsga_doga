<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Osztaly extends Model
{
    use HasFactory;

    protected $primaryKey = 'osztaly_id';

    protected $fillable = [
        'osztaly_nev'
    ];
}
