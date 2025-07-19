<?php

namespace App\Core\Services\Representative;

use App\Core\Dtos\RepresentativeDto;
use App\Http\Requests\Representative\RepresentativeUpdateRequest;

interface IRepresentativeUpdateService
{
    public function updateRepresentative(RepresentativeUpdateRequest $request): RepresentativeDto;
}
