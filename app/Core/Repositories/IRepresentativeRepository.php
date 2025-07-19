<?php

namespace App\Core\Repositories;

use App\Core\ApplicationModels\PaginatedList;
use App\Core\ApplicationModels\Pagination;
use App\Core\Dtos\RepresentativeDto;
use App\Http\Requests\Representative\RepresentativeListingRequest;
use App\Models\Representative;
use Illuminate\Support\Collection;

interface IRepresentativeRepository
{
    public function findAllRepresentatives(RepresentativeListingRequest $request, Pagination $pagination): PaginatedList;
    public function findRepresentativeById(int $id): ?RepresentativeDto;
    public function findRepresentativesByClientId(int $clientId): Collection;
    public function createRepresentative(Representative $representative): Representative;
    public function updateRepresentative(Representative $representative, int $id): bool;
    public function deleteRepresentative(int $id): bool;
}
