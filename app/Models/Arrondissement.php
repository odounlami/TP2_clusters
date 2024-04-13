<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arrondissement extends Model
{
    protected $table ='arrondissements';
    protected $fillable = [
        'nom',
    ];
    use HasFactory;
}
