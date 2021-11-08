<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

/**
 * @mixin IdeHelperPage
 */
class Page extends Model
{
    use HasFactory;
    use HasTranslations;

    public $translatable = [
        'content',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
