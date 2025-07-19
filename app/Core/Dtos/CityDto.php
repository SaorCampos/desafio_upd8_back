<?php

namespace App\Core\Dtos;

use App\Core\ApplicationModels\IArraySerializer;
use App\Core\Traits\ArraySerializer;
use App\Core\Traits\AutoMapper;
use App\Core\Traits\DefaultFields;

class CityDto implements IArraySerializer
{
    use ArraySerializer, AutoMapper, DefaultFields;

    public string $state = "";
    public string $cityName = "";
}
