<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BrokerService;
use App\Helpers\ResponseMessages;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreBrokerRequest;

class BrokersController extends BaseController
{
    protected BrokerService $brokerService;

    public function __construct(BrokerService $brokerService)
    {
        $this->brokerService = $brokerService;
    }
    /**
     * Display a listing of the resource.
     */
    public function getAllBrokers(): JsonResponse
    {
        $broker = $this->brokerService->getBrokers();
        return $this->successHttpMessage(
            'data',
            $broker,
            ResponseMessages::getSuccessMessage('Brokers', 'retrieved'),
            200
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addBroker(StoreBrokerRequest $request)
    {
        $this->brokerService->saveBroker($request);
        return $this->successHttpMessage(
            'data',
            true,
            ResponseMessages::getSuccessMessage('Brokers', 'saved'),
            201
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function getBrokerUsingBrokerId($id)
    {
        $broker = $this->brokerService->getBrokerById($id);
        return $this->successHttpMessage(
            'data',
            $broker,
            ResponseMessages::getSuccessMessage('Brokers', 'retrieved'),
            200
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
