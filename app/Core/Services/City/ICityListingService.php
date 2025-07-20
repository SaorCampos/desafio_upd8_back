<?php

namespace App\Core\Services\City;

use App\Http\Requests\City\CityListingRequest;
use Illuminate\Support\Collection;

interface ICityListingService
{
    public function listAll(CityListingRequest $request): Collection;
}
