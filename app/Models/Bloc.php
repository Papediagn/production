<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bloc extends Model
{
    use HasFactory;
    protected $fillable=['designation','numero','longueur','largeur','hauteur','tonnage','qualite','etat','date_entrer','heure_entrer','date_sortie','heure_sortie','machine_id'];

/**
 * Get the user that owns the Bloc
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function machine(): BelongsTo
{
    return $this->belongsTo(Machine::class);
}
/**
 * Get all of the tranche for the Bloc
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function tranche(): HasMany
{
    return $this->hasMany(Tranche::class);
}
}
