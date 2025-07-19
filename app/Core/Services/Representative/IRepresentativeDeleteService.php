<?php

namespace App\Core\Services\Representative;

interface IRepresentativeDeleteService
{
    public function deleteRepresentative(int $id): bool;
}
