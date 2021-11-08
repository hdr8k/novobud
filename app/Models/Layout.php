<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;
use Storage;

/**
 * @mixin IdeHelperLayout
 */
class Layout extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = [
        'name',
    ];

    public function layoutCoordinates(): HasMany
    {
        return $this->hasMany(LayoutCoordinate::class);
    }

    public function housing(): BelongsTo
    {
        return $this->belongsTo(Housing::class);
    }

    public function getUrlAttribute(): string
    {
        return Storage::url($this->path);
    }
}
