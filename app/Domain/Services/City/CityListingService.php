<?php

namespace App\Domain\Services\City;

use App\Core\Repositories\ICityRepository;
use App\Core\Services\City\ICityListingService;
use App\Http\Requests\City\CityListingRequest;
use Illuminate\Support\Collection;

class CityListingService implements ICityListingService
{
    public function __construct(
        private ICityRepository $cityRepository
    )
    {}

    public function listAll(CityListingRequest $request): Collection
    {
        return $this->cityRepository->listAll($request);
    }
}
