<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Representative extends Entity
{
    protected $table = 'representative';

    protected $fillable = [
        'name',
        'cnpj',
        'address',
        'city_id',
    ];
}
