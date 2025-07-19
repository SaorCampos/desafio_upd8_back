<?php

namespace App\Domain\Services\Client;

use App\Core\ApplicationModels\PaginatedList;
use App\Core\ApplicationModels\Pagination;
use App\Core\Dtos\ClientDto;
use App\Core\Repositories\IClientRepository;
use App\Core\Services\Client\IClientListingService;
use App\Http\Requests\Client\ClientListingRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Collection;

class ClientListingService implements IClientListingService
{
    public function __construct(
        private IClientRepository $clientRepository,
    )
    {}

    public function listAll(ClientListingRequest $request, Pagination $pagination): PaginatedList
    {
        return $this->clientRepository->listAll($request, $pagination);
    }
    public function findById(int $id): ?ClientDto
    {
        $client = $this->clientRepository->findClientById($id);
        if (!$client) {
            throw new HttpResponseException(response()->json(['message' => 'Client not found.'], 404));
        }
        return $client;
    }
    public function findClientsByCityId(int $cityId): Collection
    {
        return $this->clientRepository->findClientsByCityId($cityId);
    }
}
