<?php

namespace App\Models;

use App\Core\ApplicationModels\IArraySerializer;
use App\Core\ApplicationModels\IObjAutoMapper;
use App\Core\Traits\AutoMapper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model implements IObjAutoMapper, IArraySerializer
{
    use HasFactory, AutoMapper;
}
