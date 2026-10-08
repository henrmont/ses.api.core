<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Workplace extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'parent_id',
        'nome',
    ];

    /**
     * Unidade pai.
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(Workplace::class, 'parent_id');
    }

    /**
     * Subunidades diretas.
     */
    public function children(): HasMany
    {
        return $this->hasMany(Workplace::class, 'parent_id');
    }

    /**
     * Busca recursiva de toda a árvore de subunidades abaixo desta.
     */
    public function allChildren(): HasMany
    {
        return $this->children()->with('allChildren');
    }
}