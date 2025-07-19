<?php

namespace App\Domain\Services\Representative;

use App\Core\Dtos\CityDto;
use App\Core\Dtos\RepresentativeDto;
use App\Core\Repositories\ICityRepository;
use App\Core\Repositories\IRepresentativeClientRepository;
use App\Core\Repositories\IRepresentativeRepository;
use App\Core\Services\Representative\IRepresentativeUpdateService;
use App\Http\Requests\Representative\RepresentativeUpdateRequest;
use App\Models\City;
use App\Models\Representative;
use App\Models\RepresentativeClient;
use Illuminate\Support\Facades\DB;

class RepresentativeUpdateService implements IRepresentativeUpdateService
{
    public function __construct(
        private IRepresentativeRepository $representativeRepository,
        private IRepresentativeClientRepository $representativeClientRepository,
        private ICityRepository $cityRepository,
    ) {}

    public function updateRepresentative(RepresentativeUpdateRequest $request): RepresentativeDto
    {
        $city = $this->validateRequest($request);
        return DB::transaction(function () use ($request, $city) {
            if (!$city) {
                $cityForCreate = $this->mapCityFromRequest($request);
                $city = $this->cityRepository->createCity($cityForCreate);
                $city = $this->cityRepository->findCityByName($request->city_name);
            }
            $representativeForUpdate = $this->mapRepresentative($request, $city);
            $this->representativeRepository->updateRepresentative($representativeForUpdate, $request->id);
            foreach ($request->clients as $clientId) {
                $representativeClientForUpdate = $this->mapRepresentativeClient($request->id, (int) $clientId);
                $this->representativeClientRepository->createRepresentativeClient($representativeClientForUpdate);
            }
            return $this->representativeRepository->findRepresentativeById($request->id);
        });
    }
    private function validateRequest(RepresentativeUpdateRequest $request): ?CityDto
    {
        return $this->cityRepository->findCityByName($request->city_name);
    }
    private function mapCityFromRequest(RepresentativeUpdateRequest $request): City
    {
        $city = new City();
        $city->city_name = $request->city_name;
        $city->state = $request->state;
        return $city;
    }
    private function mapRepresentative(RepresentativeUpdateRequest $request, CityDto $city): Representative
    {
        $representative = new Representative();
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
