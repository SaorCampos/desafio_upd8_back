<?php

namespace App\Providers\DependencyInjection;

use App\Core\Repositories\IClientRepository;
use App\Core\Services\Client\IClientCreateService;
use App\Core\Services\Client\IClientDeleteService;
use App\Core\Services\Client\IClientListingService;
use App\Core\Services\Client\IClientUpdateService;
use App\Data\Repositories\ClientRepository;
use App\Domain\Services\Client\ClientCreateService;
use App\Domain\Services\Client\ClientDeleteService;
use App\Domain\Services\Client\ClientListingService;
use App\Domain\Services\Client\ClientUpdateService;

class ClientDi extends DependencyInjection
{
    protected function servicesConfiguration(): array
    {
        return [
            [IClientListingService::class, ClientListingService::class],
            [IClientDeleteService::class, ClientDeleteService::class],
            [IClientCreateService::class, ClientCreateService::class],
            [IClientUpdateService::class, ClientUpdateService::class]
        ];
    }

    protected function repositoriesConfigurations(): array
    {
        return [
            [IClientRepository::class, ClientRepository::class],
        ];
    }
}
