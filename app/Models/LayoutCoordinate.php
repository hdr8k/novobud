<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;
use Storage;

/**
 * @mixin IdeHelperLayoutCoordinate
 */
class LayoutCoordinate extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = [
        'name',
    ];

    public function layout(): BelongsTo
    {
        return $this->belongsTo(Layout::class);
    }

    public function getUrlAttribute(): string
    {
        return Storage::url($this->path);
    }

    public function getColorAreaAttribute(): string
    {
        return str_replace('#', '', mb_strtolower($this->color));
    }
}
