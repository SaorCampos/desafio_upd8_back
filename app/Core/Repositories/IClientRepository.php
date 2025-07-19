<?php

namespace App\Core\Repositories;

use App\Core\ApplicationModels\PaginatedList;
use App\Core\ApplicationModels\Pagination;
use App\Core\Dtos\ClientDto;
use App\Http\Requests\Client\ClientListingRequest;
use App\Http\Requests\Client\ClientUpdateRequest;
use App\Models\Client;
use Illuminate\Support\Collection;

interface IClientRepository
{
    public function listAll(ClientListingRequest $request, Pagination $pagination): PaginatedList;
    public function findClientById(int $id): ?ClientDto;
    public function findClientsByCityId(int $cityId): Collection;
    public function createClient(Client $client): Client;
    public function updateClient(int $id, Client $client): bool;
    public function deleteClient(int $id): bool;
}
