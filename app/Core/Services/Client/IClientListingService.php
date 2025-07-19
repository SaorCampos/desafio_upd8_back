<?php

namespace App\Core\Services\Client;

use App\Core\ApplicationModels\PaginatedList;
use App\Core\ApplicationModels\Pagination;
use App\Core\Dtos\ClientDto;
use App\Http\Requests\Client\ClientListingRequest;
use Illuminate\Support\Collection;

interface IClientListingService
{
    public function listAll(ClientListingRequest $request, Pagination $pagination): PaginatedList;
    public function findById(int $id): ?ClientDto;
    public function findClientsByCityId(int $cityId): Collection;
}
