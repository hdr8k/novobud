<?php

namespace App\Models;

use App\Models\Translate\HouseTranslate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\URL;
use Spatie\Translatable\HasTranslations;
use Storage;

/**
 * @mixin IdeHelperHouse
 */
class House extends Model
{
    use HasFactory;
    use HasTranslations;

    /**
     * @var string[]
     */
    public $translatable = [
        'name',
        'address',
        'address',
        'description',
        'status_text',
        'meta_description',
        'meta_keywords',
        'apartment_areas',
        'heating_systems',
        'building_structures',
        'additional_information',
        'construction_end',
    ];

    protected $casts = [
        'additional_information' => 'array',
    ];

    /**
     * @return HasMany
     */
    public function photoSliders(): HasMany
    {
        return $this->hasMany(PhotoSlider::class);
    }

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return string
     */
    public function getMainPhotoUrlAttribute(): string
    {
        return Storage::url($this->main_photo);
    }

    /**
     * @param $value
     *
     * @return string
     */
    public function getPriceFormatAttribute($value): string
    {
        return number_format($value, 2, '.', ',');
    }

    /**
     * @param $value
     *
     * @return array
     */
    public function getCoordinateAttribute($value): array
    {
        return explode(',', $value);
    }

    public function housings(): HasMany
    {
        return $this->hasMany(Housing::class);
    }
}
