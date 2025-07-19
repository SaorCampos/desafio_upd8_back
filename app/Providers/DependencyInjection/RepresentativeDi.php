<?php

namespace App\Providers\DependencyInjection;

use App\Core\Repositories\IRepresentativeRepository;
use App\Core\Services\Representative\IRepresentativeCreateService;
use App\Core\Services\Representative\IRepresentativeDeleteService;
use App\Core\Services\Representative\IRepresentativeListingService;
use App\Core\Services\Representative\IRepresentativeUpdateService;
use App\Data\Repositories\RepresentativeRepository;
use App\Domain\Services\Representative\RepresentativeCreateService;
use App\Domain\Services\Representative\RepresentativeDeleteService;
use App\Domain\Services\Representative\RepresentativeListingService;
use App\Domain\Services\Representative\RepresentativeUpdateService;

class RepresentativeDi extends DependencyInjection
{
    protected function servicesConfiguration(): array
    {
        return [
            [IRepresentativeListingService::class, RepresentativeListingService::class],
            [IRepresentativeCreateService::class, RepresentativeCreateService::class],
            [IRepresentativeUpdateService::class, RepresentativeUpdateService::class],
            [IRepresentativeDeleteService::class, RepresentativeDeleteService::class],
        ];
    }

    protected function repositoriesConfigurations(): array
    {
        return [
            [IRepresentativeRepository::class, RepresentativeRepository::class],
        ];
    }
}
