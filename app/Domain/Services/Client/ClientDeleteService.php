<?php

namespace App\Domain\Services\Client;

use App\Core\Repositories\IClientRepository;
use App\Core\Services\Client\IClientDeleteService;

class ClientDeleteService implements IClientDeleteService
{
    public function __construct(
        private IClientRepository $clientRepository
    )
    {
    }

    public function delete(int $id): bool
    {
        return $this->clientRepository->deleteClient($id);
    }
}
