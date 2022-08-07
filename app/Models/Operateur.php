<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Operateur extends Model
{
    use HasFactory;
    protected $fillable=['prenom','nom','telephone'];
     /**
      * Get all of the comments for the Operateur
      *
      * @return \Illuminate\Database\Eloquent\Relations\HasMany
      */
     public function machine(): HasMany
     {
         return $this->hasMany(Machine::class);
     }
}
