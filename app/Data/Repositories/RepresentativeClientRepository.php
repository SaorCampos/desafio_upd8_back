<?php

namespace App\Data\Repositories;

use App\Core\Repositories\IRepresentativeClientRepository;
use App\Models\RepresentativeClient;

class RepresentativeClientRepository implements IRepresentativeClientRepository
{
    public function createRepresentativeClient(RepresentativeClient $representativeClient): RepresentativeClient
    {
        return RepresentativeClient::create($representativeClient->toArray());
    }
    public function deleteRepresentativeClientByClientId(int $clientId): bool
    {
        return RepresentativeClient::where('client_id', $clientId)->delete();
    }
}
