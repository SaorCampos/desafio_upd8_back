<?php

namespace App\Core\Dtos;

use App\Core\ApplicationModels\IArraySerializer;
use App\Core\Traits\ArraySerializer;
use App\Core\Traits\AutoMapper;
use App\Core\Traits\DefaultFields;

class ClientDto implements IArraySerializer
{
    use ArraySerializer, AutoMapper, DefaultFields;

    public string $name = "";
    public string $cpf = "";
    public string $sex = "";
    public string $address = "";
    public string $dateBirth = "";
    public string $city = "";
    public string $state = "";
}
