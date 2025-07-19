<?php

namespace App\Http\Controllers;

use App\Exceptions\HttpInternalServerError;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Collection;
use Symfony\Component\HttpFoundation\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function error(Exception $details): Response
    {
        throw new HttpResponseException(HttpInternalServerError::getResponse($details));
    }
}
