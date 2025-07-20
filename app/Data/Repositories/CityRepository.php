<?php

namespace App\Data\Repositories;

use App\Core\Dtos\CityDto;
use App\Core\Repositories\ICityRepository;
use App\Http\Requests\City\CityListingRequest;
use App\Models\City;
use Illuminate\Support\Collection;

class CityRepository implements ICityRepository
{
    public function listAll(CityListingRequest $request): Collection
    {
        $resultCollection = City::query()
            ->where($this->getFilters($request))
            ->orderBy('city_name')
            ->get();
        foreach ($resultCollection as $key => $row) {
            $resultCollection[$key] = $row->mapTo(CityDto::class);
        }
        return $resultCollection;
    }
    private function getFilters(CityListingRequest $request): array
    {
        $filters = [];
        if (!is_null($request->name)) {
            $filters[] = ['city_name', 'like', '%' . $request->name . '%'];
        }
        return $filters;
    }

    public function findCityByName(string $name): ?CityDto
    {
        $city = City::query()
            ->where('city_name', $name)
            ->first();
        if(!$city) {
            return null;
        }
        return $city->mapTo(CityDto::class);
    }
    public function createCity(City $city): City
    {
        return City::query()->create($city->toArray());
    }
}
