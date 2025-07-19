<?php

namespace App\Data\Repositories;

use App\Core\ApplicationModels\PaginatedList;
use App\Core\ApplicationModels\Pagination;
use App\Core\Dtos\ClientDto;
use App\Core\Repositories\IClientRepository;
use App\Http\Requests\Client\ClientListingRequest;
use App\Models\Client;
use Illuminate\Support\Collection;

class ClientRepository implements IClientRepository
{
    public function listAll(ClientListingRequest $request, Pagination $pagination): PaginatedList
    {
        $query = Client::from('client as c')
            ->join('city as c2', 'c2.id', '=', 'c.city_id')
            ->select([
                'c.id',
                'c.name',
                'c.cpf',
                'c.sex',
                'c.date_birth',
                'c.address',
                'c2.state',
                'c2.city_name as city',
            ])
            ->where($this->getFilters($request))
            ->paginate($pagination->perPage, ['*'], 'page', $pagination->page);
        return PaginatedList::fromPaginatedQuery(
            query:$query,
            pagination:$pagination,
            dtoClass: ClientDto::class
        );
    }
    private function getFilters(ClientListingRequest $request): array
    {
        $filters = [];
        if (!is_null($request->name)) {
            $filters[] = ['c.name', 'like', "%{$request->name}%"];
        }
        if (!is_null($request->cpf)) {
            $filters[] = ['c.cpf', 'like', "%{$request->cpf}%"];
        }
        if (!is_null($request->city)) {
            $filters[] = ['c2.city_name', 'like', "%{$request->city}%"];
        }
        if (!is_null($request->state)) {
            $filters[] = ['c2.state', 'like', "%{$request->state}%"];
        }
        if (!is_null($request->sex)) {
            $filters[] = ['c.sex', '=', $request->sex];
        }
        return $filters;
    }
    public function findClientById(int $id): ?ClientDto
    {
        $client = Client::from('client as c')
            ->join('city as c2', 'c2.id', '=', 'c.city_id')
            ->select([
                'c.id',
                'c.name',
                'c.cpf',
                'c.sex',
                'c.date_birth',
                'c.address',
                'c2.state',
                'c2.city_name as city',
            ])
            ->where('c.id', $id)
            ->first();
        if (is_null($client)) {
            return null;
        }
        return $client->mapTo(ClientDto::class);
    }
    public function findClientsByCityId(int $cityId): Collection
    {
        $resultCollection = Client::from('client as c')
            ->join('city as c2', 'c2.id', '=', 'c.city_id')
            ->select([
                'c.id',
                'c.name',
                'c.cpf',
                'c.sex',
                'c.date_birth',
                'c.address',
                'c2.state',
                'c2.city_name as city',
            ])
            ->where('c.city_id', $cityId)
            ->get();
        foreach ($resultCollection as $key => $row) {
            $resultCollection[$key] = $row->mapTo(ClientDto::class);
        }
        return $resultCollection;
    }
    public function createClient(Client $client): Client
    {
        return Client::query()->create($client->toArray());
    }
    public function updateClient(int $id, Client $client): bool
    {
        return Client::query()->where('id', $id)->update($client->toArray());
    }
    public function deleteClient(int $id): bool
    {
        return Client::query()->where('id', $id)->delete();
    }
}
