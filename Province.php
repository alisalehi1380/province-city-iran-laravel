<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class province extends Model
{
    use HasFactory;
    
    const NAME = 'name';

    protected $fillable = [
        self::NAME
    ];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }
}
