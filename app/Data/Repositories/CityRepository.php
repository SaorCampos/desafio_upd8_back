<?php

namespace App\Data\Repositories;

use App\Core\ApplicationModels\PaginatedList;
use App\Core\ApplicationModels\Pagination;
use App\Core\Dtos\CityDto;
use App\Core\Repositories\ICityRepository;
use App\Http\Requests\City\CityListingRequest;
use App\Models\City;

class CityRepository implements ICityRepository
{
    public function listAll(CityListingRequest $request, Pagination $pagination): PaginatedList
    {
        $query = City::query()
            ->where($this->getFilters($request))
            ->orderBy('city_name')
            ->paginate($pagination->perPage, ['*'], 'page', $pagination->page);
        return PaginatedList::fromPaginatedQuery(
            query: $query,
            pagination: $pagination,
            dtoClass: CityDto::class
        );
    }

    private function getFilters(CityListingRequest $request): array
    {
        $filters = [];
        $filters = [];
        if (!is_null($request->name)) {
            $filters[] = ['city_name', 'like', '%' . $request->name . '%'];
        }
        return $filters;
    }
}
