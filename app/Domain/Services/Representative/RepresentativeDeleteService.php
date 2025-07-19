<?php

namespace App\Domain\Services\Representative;

use App\Core\Repositories\IRepresentativeRepository;
use App\Core\Services\Representative\IRepresentativeDeleteService;

class RepresentativeDeleteService implements IRepresentativeDeleteService
{
    public function __construct(
        private IRepresentativeRepository $representativeRepository
    )
    {}

    public function deleteRepresentative(int $id): bool
    {
        return $this->representativeRepository->deleteRepresentative($id);
    }
}
