<?php

namespace App\Domain\Services\City;

use App\Core\ApplicationModels\Pagination;
use App\Core\ApplicationModels\PaginatedList;
use App\Core\Repositories\ICityRepository;
use App\Core\Services\City\ICityListingService;
use App\Http\Requests\City\CityListingRequest;

class CityListingService implements ICityListingService
{
    public function __construct(
        private ICityRepository $cityRepository
    )
    {}

    public function listAll(CityListingRequest $request, Pagination $pagination): PaginatedList
    {
        return $this->cityRepository->listAll($request, $pagination);
    }
}
