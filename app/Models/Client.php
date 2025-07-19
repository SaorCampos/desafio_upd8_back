<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Entity
{
    protected $table = 'client';

    protected $fillable = [
        'name',
        'cpf',
        'sex',
        'address',
        'city_id',
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
