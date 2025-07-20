<?php

namespace App\Core\Repositories;

use App\Core\ApplicationModels\PaginatedList;
use App\Core\ApplicationModels\Pagination;
use App\Core\Dtos\CityDto;
use App\Http\Requests\City\CityListingRequest;
use App\Models\City;
use Illuminate\Support\Collection;

interface ICityRepository
{
    public function listAll(CityListingRequest $request): Collection;
    public function findCityByName(string $name): ?CityDto;
    public function createCity(City $city): City;
}
