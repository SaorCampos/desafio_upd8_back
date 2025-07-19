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

}
