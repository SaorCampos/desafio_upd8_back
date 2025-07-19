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
        'date_birth'
    ];
}
