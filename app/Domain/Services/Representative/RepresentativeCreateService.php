<?php

namespace App\Domain\Services\Representative;

use App\Core\Dtos\CityDto;
use App\Core\Dtos\RepresentativeDto;
use App\Core\Repositories\ICityRepository;
use App\Core\Repositories\IRepresentativeClientRepository;
use App\Core\Repositories\IRepresentativeRepository;
use App\Core\Services\Representative\IRepresentativeCreateService;
use App\Http\Requests\Representative\RepresentativeCreateRequest;
use App\Models\City;
use App\Models\Representative;
use App\Models\RepresentativeClient;
use Illuminate\Support\Facades\DB;

class RepresentativeCreateService implements IRepresentativeCreateService
{
    public function __construct(
        private IRepresentativeRepository $representativeRepository,
        private IRepresentativeClientRepository $representativeClientRepository,
        private ICityRepository $cityRepository,
    ) {}

    public function createRepresentative(RepresentativeCreateRequest $request): RepresentativeDto
    {
        $city = $this->validateRequest($request);
        return DB::transaction(function () use ($request, $city) {
            if (!$city) {
                $cityForCreate = $this->mapCityFromRequest($request);
                $city = $this->cityRepository->createCity($cityForCreate);
                $city = $this->cityRepository->findCityByName($request->city_name);
            }
            $representativeForCreate = $this->mapRepresentative($request, $city);
            $representative = $this->representativeRepository->createRepresentative($representativeForCreate);
            foreach ($request->clients as $clientId) {
                $representativeClientForCreate = $this->mapRepresentativeClient($representative->id, (int) $clientId);
                $this->representativeClientRepository->createRepresentativeClient($representativeClientForCreate);
            }
            return $this->representativeRepository->findRepresentativeById($representative->id);
        });
    }
    private function validateRequest(RepresentativeCreateRequest $request): ?CityDto
    {
        return $this->cityRepository->findCityByName($request->city_name);
    }
    private function mapCityFromRequest(RepresentativeCreateRequest $request): City
    {
        $city = new City();
        $city->city_name = $request->city_name;
        $city->state = $request->state;
        return $city;
    }
    private function mapRepresentative(RepresentativeCreateRequest $request, CityDto $city): Representative
    {
        $representative = new Representative();
        $representative->name = $request->name;
        $representative->cnpj = $request->cnpj;
        $representative->city_id = $city->id;
        $representative->address = $request->address;
        return $representative;
    }
    private function mapRepresentativeClient(int $representativeId, int $clientId): RepresentativeClient
    {
        $representativeClient = new RepresentativeClient();
        $representativeClient->representative_id = $representativeId;
        $representativeClient->client_id = $clientId;
        return $representativeClient;
    }
}
