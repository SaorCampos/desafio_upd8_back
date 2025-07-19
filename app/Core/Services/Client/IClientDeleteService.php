<?php

namespace App\Core\Services\Client;

interface IClientDeleteService
{
    public function delete(int $id): bool;
}
