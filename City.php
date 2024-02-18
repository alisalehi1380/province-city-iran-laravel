<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class City extends Model
{
    use HasFactory;
    
    const NAME = 'name';
    const PROVINCE_ID = 'province_id';

    protected $fillable = [
        self::NAME,
        self::PROVINCE_ID,
    ];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }
}
