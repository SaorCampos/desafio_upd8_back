<?php

namespace App\Exceptions;

use App\Support\Utils\Messages\DefaultErrorMessages;
use Exception;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class HttpInternalServerError
{
    public static function getResponse(Exception $details): Response
    {
        Log::error("Error: [" . $details->getMessage() . "]");
        return response()->json([
            "message" => DefaultErrorMessages::DATABASE_QUERY_ERROR,
            "data" => [],
            "status" => Response::HTTP_INTERNAL_SERVER_ERROR,
            "details" => $details->getMessage(),
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
