<?php

namespace App\Core\Repositories;

use App\Models\RepresentativeClient;

interface IRepresentativeClientRepository
{
    public function createRepresentativeClient(RepresentativeClient $representativeClient): RepresentativeClient;
    public function deleteRepresentativeClientByClientId(int $clientId): bool;
}
