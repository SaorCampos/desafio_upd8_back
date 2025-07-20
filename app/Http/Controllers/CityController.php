<?php

namespace App\Http\Controllers;

use App\Core\ApplicationModels\Pagination;
use App\Core\Services\City\ICityListingService;
use App\Http\Requests\City\CityListingRequest;
use App\Support\Models\BaseResponse;
use Exception;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;
use Symfony\Component\HttpFoundation\Response;

class CityController extends Controller
{
    public function __construct(
        private ICityListingService $cityListingService,
    ) {}

    public function listAll(CityListingRequest $request): Response
    {
        try {
            $cities = $this->cityListingService->listAll($request);
        return BaseResponse::builder()
            ->setData($cities)
            ->setMessage('Cities listed successfully')
            ->setStatusCode(200)
            ->response();
        } catch (Exception $e) {
            Log::error($e);
            return Controller::error($e);
        }

    }
}
