<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperBitrixError
 */
class BitrixError extends Model
{
    use HasFactory;

    protected $casts = [
        'data' => 'array',
    ];
}
