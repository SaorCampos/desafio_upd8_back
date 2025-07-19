<?php

namespace App\Providers\DependencyInjection;

use App\Core\Repositories\IRepresentativeClientRepository;
use App\Data\Repositories\RepresentativeClientRepository;

class RepresentativeClientDi extends DependencyInjection
{
    protected function servicesConfiguration(): array
    {
        return [];
    }

    protected function repositoriesConfigurations(): array
    {
        return [
            [IRepresentativeClientRepository::class, RepresentativeClientRepository::class],
        ];
    }
}
