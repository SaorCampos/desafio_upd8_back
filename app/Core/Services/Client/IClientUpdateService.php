<?php

namespace App\Core\Services\Client;

use App\Core\Dtos\ClientDto;
use App\Http\Requests\Client\ClientUpdateRequest;

interface IClientUpdateService
{
    public function update(ClientUpdateRequest $request): ClientDto;
}
