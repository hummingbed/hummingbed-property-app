<?php

namespace App\Services;

use App\Repositories\BrokerRepository;

class BrokerService extends BaseService
{
    public function __construct(BrokerRepository $repository)
    {
        $this->repo = $repository;
    }

    public function getBrokers()
    {
        return $this->repo->findAll();
    }
}
