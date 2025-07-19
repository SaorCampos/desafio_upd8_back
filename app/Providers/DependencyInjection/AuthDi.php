<?php

namespace App\Providers\DependencyInjection;

use App\Core\Repositories\Auth\IAuthRepository;
use App\Core\Services\Auth\ILoginAuthService;
use App\Core\Services\Auth\ILogoutAuthService;
use App\Data\Repositories\Auth\AuthRepository;
use App\Domain\Services\Auth\LoginAuthService;
use App\Domain\Services\Auth\LogoutAuthService;

class AuthDi extends DependencyInjection
{
    protected function servicesConfiguration(): array
    {
        return [
            [ILoginAuthService::class, LoginAuthService::class],
            [ILogoutAuthService::class, LogoutAuthService::class],
        ];
    }

    protected function repositoriesConfigurations(): array
    {
        return [
            [IAuthRepository::class, AuthRepository::class]
        ];
    }
}
