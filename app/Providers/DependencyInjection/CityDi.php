<?php

namespace App\Providers\DependencyInjection;

use App\Core\Repositories\ICityRepository;
use App\Core\Services\City\ICityListingService;
use App\Data\Repositories\CityRepository;
use App\Domain\Services\City\CityListingService;

class CityDi extends DependencyInjection
{
    protected function servicesConfiguration(): array
    {
        return [
            [ICityListingService::class, CityListingService::class],
        ];
    }

    protected function repositoriesConfigurations(): array
    {
        return [
            [ICityRepository::class, CityRepository::class],
        ];
    }
}
