<?php

namespace App\Domain\Services\Representative;

use App\Core\ApplicationModels\PaginatedList;
use App\Core\ApplicationModels\Pagination;
use App\Core\Dtos\RepresentativeDto;
use App\Core\Repositories\IRepresentativeRepository;
use App\Core\Services\Representative\IRepresentativeListingService;
use App\Http\Requests\Representative\RepresentativeListingRequest;
use Illuminate\Support\Collection;

class RepresentativeListingService implements IRepresentativeListingService
{
    public function __construct(
        private IRepresentativeRepository $representativeRepository,
    )
    {}

    public function findAllRepresentatives(RepresentativeListingRequest $request, Pagination $pagination): PaginatedList
    {
        return $this->representativeRepository->findAllRepresentatives($request, $pagination);
    }
    public function findRepresentativeById(int $id): ?RepresentativeDto
    {
        return $this->representativeRepository->findRepresentativeById($id);
    }
    public function findRepresentativesByClientId(int $clientId): Collection
    {
        return $this->representativeRepository->findRepresentativesByClientId($clientId);
    }
}
