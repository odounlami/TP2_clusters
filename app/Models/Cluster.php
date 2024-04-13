<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    protected $table = 'clusters';
    public function filiere()
      {
          return $this->belongsTo(Filiere::class, 'filiere_id', 'idFiliere');
      }
      public function village()
      {
          return $this->belongsTo(village::class, 'village_id', 'idVillage');
      }
    protected $fillable = [
        'nom',
    ];
    
    use HasFactory;
}
