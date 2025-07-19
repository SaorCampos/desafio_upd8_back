<?php

namespace App\Models;

class RepresentativeClient extends Entity
{
    protected $table = 'representative_client';

    protected $fillable = [
        'representative_id',
        'client_id',
    ];
}
