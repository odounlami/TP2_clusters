<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    use HasFactory;
    protected $table = 'communes';

     //relation avec departement 
     public function departement()
     {
         return $this->belongsTo(Departement::class, 'departement_id', 'idDepartement');
     }

    protected $fillable = [
        'nom',
        'departement_id',
    ];
}
