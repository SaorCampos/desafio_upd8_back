<?php

namespace App\Http\Controllers;

use App\Core\ApplicationModels\Pagination;
use App\Core\Services\Representative\IRepresentativeCreateService;
use App\Core\Services\Representative\IRepresentativeDeleteService;
use App\Core\Services\Representative\IRepresentativeListingService;
use App\Core\Services\Representative\IRepresentativeUpdateService;
use App\Http\Requests\Representative\RepresentativeCreateRequest;
use App\Http\Requests\Representative\RepresentativeListingRequest;
use App\Http\Requests\Representative\RepresentativeUpdateRequest;
use App\Support\Models\BaseResponse;
use Symfony\Component\HttpFoundation\Response;

class RepresentativeController extends Controller
{
    public function __construct(
        private IRepresentativeCreateService $representativeCreateService,
        private IRepresentativeListingService $representativeListingService,
        private IRepresentativeUpdateService $representativeUpdateService,
        private IRepresentativeDeleteService $representativeDeleteService
    )
    {
    }

    public function findAllRepresentatives(RepresentativeListingRequest $request): Response
    {
        $representatives = $this->representativeListingService->findAllRepresentatives(
            request: $request,
            pagination: Pagination::createFromRequest($request)
        );
        return BaseResponse::builder()
            ->setData($representatives)
            ->setMessage('Representatives listed successfully')
            ->setStatusCode(200)
            ->response();
    }
    public function findRepresentativeById(int $id): Response
    {
        $representative = $this->representativeListingService->findRepresentativeById($id);
        return BaseResponse::builder()
            ->setData($representative)
            ->setMessage('Representative listed successfully')
            ->setStatusCode(200)
            ->response();
    }
    public function findRepresentativesByClientId(int $clientId): Response
    {
        $representatives = $this->representativeListingService->findRepresentativesByClientId($clientId);
        return BaseResponse::builder()
            ->setData($representatives)
            ->setMessage('Representatives listed successfully')
            ->setStatusCode(200)
            ->response();
    }
    public function createRepresentative(RepresentativeCreateRequest $request): Response
    {
        $representative = $this->representativeCreateService->createRepresentative($request);
        return BaseResponse::builder()
            ->setData($representative)
            ->setMessage('Representative created successfully')
            ->setStatusCode(201)
            ->response();
    }
    public function updateRepresentative(RepresentativeUpdateRequest $request): Response
    {
        $representative = $this->representativeUpdateService->updateRepresentative($request);
        return BaseResponse::builder()
            ->setData($representative)
            ->setMessage('Representative updated successfully')
            ->setStatusCode(200)
            ->response();
    }
}
