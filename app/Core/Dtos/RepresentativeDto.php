<?php

namespace App\Core\Dtos;

use App\Core\ApplicationModels\IArraySerializer;
use App\Core\Traits\ArraySerializer;
use App\Core\Traits\AutoMapper;
use App\Core\Traits\DefaultFields;

class RepresentativeDto implements IArraySerializer
{
    use ArraySerializer, AutoMapper, DefaultFields;
    public string $name = "";
    public string $cnpj = "";
    public string $address = "";
    public string $city = "";
    public string $state = "";
}
