<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

/**
 * @mixin IdeHelperHousing
 */
class Housing extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = [
        'name',
    ];

    public function layouts(): HasMany
    {
        return $this->hasMany(Layout::class);
    }

    public function house(): BelongsTo
    {
        return $this->belongsTo(House::class);
    }
}
