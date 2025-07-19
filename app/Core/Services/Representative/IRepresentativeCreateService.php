<?php

namespace App\Core\Services\Representative;

use App\Core\Dtos\RepresentativeDto;
use App\Http\Requests\Representative\RepresentativeCreateRequest;

interface IRepresentativeCreateService
{
    public function createRepresentative(RepresentativeCreateRequest $request): RepresentativeDto;
}
