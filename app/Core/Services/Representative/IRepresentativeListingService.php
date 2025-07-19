<?php

namespace App\Core\Services\Representative;

use App\Core\ApplicationModels\PaginatedList;
use App\Core\ApplicationModels\Pagination;
use App\Core\Dtos\RepresentativeDto;
use App\Http\Requests\Representative\RepresentativeListingRequest;
use Illuminate\Support\Collection;

interface IRepresentativeListingService
{
    public function findAllRepresentatives(RepresentativeListingRequest $request, Pagination $pagination): PaginatedList;
    public function findRepresentativeById(int $id): ?RepresentativeDto;
    public function findRepresentativesByClientId(int $clientId): Collection;
}
