<?php

namespace App\Domain\Services\Client;

use App\Core\Dtos\CityDto;
use App\Core\Dtos\ClientDto;
use App\Core\Repositories\ICityRepository;
use App\Core\Repositories\IClientRepository;
use App\Core\Services\Client\IClientUpdateService;
use App\Http\Requests\Client\ClientUpdateRequest;
use App\Models\City;
use App\Models\Client;

class ClientUpdateService implements IClientUpdateService
{
    public function __construct(
        private IClientRepository $clientRepository,
        private ICityRepository $cityRepository,
    )
    {
    }

    public function update(ClientUpdateRequest $request): ClientDto
    {
        $city = $this->validateRequest($request);
        if(!$city) {
            $cityForCreate = $this->mapCityFromRequest($request);
            $city = $this->cityRepository->createCity($cityForCreate);
            $city = $this->cityRepository->findCityByName($request->city_name);
        }
        $clientForUpdate = $this->mapClient($request, $city);
        $this->clientRepository->updateClient($request->client_id, $clientForUpdate);
        return $this->clientRepository->findClientById($request->client_id);
    }
    private function validateRequest(ClientUpdateRequest $request): ?CityDto
    {
        return $this->cityRepository->findCityByName($request->city_name);
    }
    private function mapCityFromRequest(ClientUpdateRequest $request): City
    {
        $city = new City();
        $city->city_name = $request->city_name;
        $city->state = $request->state;
        return $city;
    }
    private function mapClient(ClientUpdateRequest $request, CityDto $city): Client
    {
        $client = new Client();
        $client->address = $request->address;
        $client->city_id = $city->id;
        return $client;
    }
}
