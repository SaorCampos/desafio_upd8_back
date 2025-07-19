<?php

namespace App\Core\Services\Client;

use App\Core\Dtos\ClientDto;
use App\Http\Requests\Client\ClientCreateRequest;

interface IClientCreateService
{
    public function create(ClientCreateRequest $request): ClientDto;
}
