<?php

namespace App\Models\Translate;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperHouseTranslate
 */
class HouseTranslate extends Model
{
    use HasFactory;

    public $timestamps = false;
}
