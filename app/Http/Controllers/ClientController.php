<?php

namespace App\Http\Controllers;

use App\Core\ApplicationModels\Pagination;
use App\Core\Services\Client\IClientCreateService;
use App\Core\Services\Client\IClientDeleteService;
use App\Core\Services\Client\IClientListingService;
use App\Core\Services\Client\IClientUpdateService;
use App\Http\Requests\Client\ClientCreateRequest;
use App\Http\Requests\Client\ClientListingRequest;
use App\Http\Requests\Client\ClientUpdateRequest;
use App\Support\Models\BaseResponse;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{
    public function __construct(
        private IClientListingService $clientListingService,
        private IClientCreateService $clientCreateService,
        private IClientUpdateService $clientUpdateService,
        private IClientDeleteService $clientDeleteService,
    ) {}

    public function findAllCLients(ClientListingRequest $request): Response
    {
        $clients = $this->clientListingService->listAll(
            request: $request,
            pagination: Pagination::createFromRequest($request)
        );
        return BaseResponse::builder()
            ->setData($clients)
            ->setMessage('Clients listed successfully')
            ->setStatusCode(200)
            ->response();
    }
    public function findClientById(int $id): Response
    {
        $client = $this->clientListingService->findById($id);
        return BaseResponse::builder()
            ->setData($client)
            ->setMessage('Client found successfully')
            ->setStatusCode(200)
            ->response();
    }
    public function findClientsByCityId(int $cityId): Response
    {
        $clients = $this->clientListingService->findClientsByCityId($cityId);
        return BaseResponse::builder()
            ->setData($clients)
            ->setMessage('Clients found successfully')
            ->setStatusCode(200)
            ->response();
    }
    public function createClient(ClientCreateRequest $request): Response
    {
        $client = $this->clientCreateService->create($request);
        return BaseResponse::builder()
            ->setData($client)
            ->setMessage('Client created successfully')
            ->setStatusCode(201)
            ->response();
    }
    public function updateClient(ClientUpdateRequest $request): Response
    {
        $client = $this->clientUpdateService->update($request);
        return BaseResponse::builder()
            ->setData($client)
            ->setMessage('Client updated successfully')
            ->setStatusCode(200)
            ->response();
    }
    public function deleteClient(int $id): Response
    {
        $bool = $this->clientDeleteService->delete($id);
        if (!$bool) {
            return BaseResponse::builder()
                ->setMessage('Client not found')
                ->setStatusCode(404)
                ->response();
        } else {
            return BaseResponse::builder()
                ->setMessage('Client deleted successfully')
                ->setStatusCode(200)
                ->response();
        }
    }
}
