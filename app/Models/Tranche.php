<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tranche extends Model
{
    use HasFactory;
    protected $fillable =['long','larg','epaisseur','quantite','observation','bloc_id'];
    /**
     * Get the user that owns the Tranche
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bloc(): BelongsTo
    {
        return $this->belongsTo(Bloc::class);
    }
}
