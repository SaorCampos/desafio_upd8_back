<?php

namespace App\Core\Repositories;

use App\Core\ApplicationModels\PaginatedList;
use App\Core\ApplicationModels\Pagination;
use App\Http\Requests\City\CityListingRequest;

interface ICityRepository
{
    public function listAll(CityListingRequest $request, Pagination $pagination): PaginatedList;
}
