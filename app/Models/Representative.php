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

    public function clients(): BelongsToMany
    {
        return $this->belongsToMany(Client::class, 'representative_client', 'representative_id', 'client_id');
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}
