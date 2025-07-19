<?php

namespace App\Core\Services\City;

use App\Core\ApplicationModels\PaginatedList;
use App\Core\ApplicationModels\Pagination;
use App\Http\Requests\City\CityListingRequest;

interface ICityListingService
{
    public function listAll(CityListingRequest $request, Pagination $pagination): PaginatedList;
}
