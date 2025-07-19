<?php

namespace App\Data\Repositories;

use App\Core\ApplicationModels\PaginatedList;
use App\Core\ApplicationModels\Pagination;
use App\Core\Dtos\RepresentativeDto;
use App\Core\Repositories\IRepresentativeRepository;
use App\Http\Requests\Representative\RepresentativeListingRequest;
use App\Models\Representative;
use Illuminate\Support\Collection;

class RepresentativeRepository implements IRepresentativeRepository
{
    public function findAllRepresentatives(RepresentativeListingRequest $request, Pagination $pagination): PaginatedList
    {
        $query = Representative::from('representative as r')
            ->join('city as c', 'r.city_id', '=', 'c.id')
            ->select([
                'r.id',
                'r.name',
                'r.cnpj',
                'r.address',
                'c.city_name as city',
                'c.state',
            ])
            ->where($this->getFilters($request))
            ->paginate($pagination->perPage, ['*'], 'page', $pagination->page);
        return PaginatedList::fromPaginatedQuery(
            query: $query,
            pagination: $pagination,
            dtoClass: RepresentativeDto::class
        );
    }
    private function getFilters(RepresentativeListingRequest $request): array
    {
        $filters = [];
        if (!is_null($request->name)) {
            $filters[] = ['r.name', 'like', '%' . $request->name . '%'];
        }
        if (!is_null($request->cnpj)) {
            $filters[] = ['r.cnpj', 'like', '%' . $request->cnpj . '%'];
        }
        if (!is_null($request->city)) {
            $filters[] = ['c.city_name', 'like', '%' . $request->city . '%'];
        }
        if (!is_null($request->state)) {
            $filters[] = ['c.state', 'like', '%' . $request->state . '%'];
        }
        return $filters;
    }
    public function findRepresentativeById(int $id): ?RepresentativeDto
    {
        $representative = Representative::from('representative as r')
            ->join('city as c', 'r.city_id', '=', 'c.id')
            ->select([
                'r.id',
                'r.name',
                'r.cnpj',
                'r.address',
                'c.city_name as city',
                'c.state',
            ])
            ->where('r.id', $id)
            ->first();
        if(!$representative) {
            return null;
        }
        return $representative->mapTo(RepresentativeDto::class);
    }
    public function findRepresentativesByClientId(int $clientId): Collection
    {
        $resultCollection = Representative::from('representative as r')
            ->join('city as c', 'r.city_id', '=', 'c.id')
            ->join('representative_client as rc', 'r.id', '=', 'rc.representative_id')
            ->select([
                'r.id',
                'r.name',
                'r.cnpj',
                'r.address',
                'c.city_name as city',
                'c.state',
            ])
            ->where('rc.client_id', $clientId)
            ->get();
        foreach ($resultCollection as $key => $row) {
            $resultCollection[$key] = $row->mapTo(RepresentativeDto::class);
        }
        return $resultCollection;

    }
    public function createRepresentative(Representative $representative): Representative
    {
        return Representative::create($representative->toArray());
    }
    public function updateRepresentative(Representative $representative, int $id): bool
    {
        return Representative::where('id', $id)->update($representative->toArray());
    }
    public function deleteRepresentative(int $id): bool
    {
        return Representative::where('id', $id)->delete();
    }
}
