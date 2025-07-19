<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Entity
{
    protected $table = 'city';

    protected $fillable = [
        'state',
        'city_name',
    ];

    public function client(): HasMany
    {
        return $this->hasMany(Client::class, 'city_id');
    }

    public function representative(): HasMany
    {
        return $this->hasMany(Representative::class, 'city_id');
    }
}
