<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Machine extends Model
{
    use HasFactory;
    protected $fillable=['libelle','operateur_id'];
    /**
     * Get the operateur that owns the Machine
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function operateur(): BelongsTo
    {
        return $this->belongsTo(Operateur::class);
    }
    /**
     * Get all of the comments for the Machine
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bloc(): HasMany
    {
        return $this->hasMany(Bloc::class);
    }

}
