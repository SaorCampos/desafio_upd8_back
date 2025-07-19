<?php

namespace App\Domain\Services\Client;

use App\Core\Dtos\CityDto;
use App\Core\Dtos\ClientDto;
use App\Core\Repositories\ICityRepository;
use App\Core\Repositories\IClientRepository;
use App\Core\Services\Client\IClientCreateService;
use App\Http\Requests\Client\ClientCreateRequest;
use App\Models\City;
use App\Models\Client;

class ClientCreateService implements IClientCreateService
{
    public function __construct(
        private IClientRepository $clientRepository,
        private ICityRepository $cityRepository,
    )
    {
    }

    public function create(ClientCreateRequest $request): ClientDto
    {
        $city = $this->validateRequest($request);
        if(!$city) {
            $cityForCreate = $this->mapCityFromRequest($request);
            $city = $this->cityRepository->createCity($cityForCreate);
        }
        $clientForCreate = $this->mapClient($request, $city);
        $client = $this->clientRepository->createClient($clientForCreate);
        return $this->clientRepository->findClientById($client->id);
    }
    private function validateRequest(ClientCreateRequest $request): ?CityDto
    {
        return $this->cityRepository->findCityByName($request->city_name);
    }
    private function mapCityFromRequest(ClientCreateRequest $request): City
    {
        $city = new City();
        $city->city_name = $request->city_name;
        $city->state = $request->state;
        return $city;
    }
    private function mapClient(ClientCreateRequest $request, City|CityDto $city): Client
    {
        $client = new Client();
        $client->name = $request->name;
        $client->cpf = $request->cpf;
        $client->address = $request->address;
        $client->city_id = $city->id;
        $client->date_birth = $request->date_birth;
        return $client;
    }
}
