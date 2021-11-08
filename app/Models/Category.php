<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @mixin IdeHelperCategory
 */
class Category extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = ['name'];

    public function houses(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(House::class);
    }
}
