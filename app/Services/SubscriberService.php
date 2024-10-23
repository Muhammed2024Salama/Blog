<?php

namespace App\Services;

use App\Repositories\SubscriberRepository;

class SubscriberService
{
    /**
     * @var SubscriberRepository
     */
    protected $subscriberRepository;

    /**
     * @param SubscriberRepository $subscriberRepository
     */
    public function __construct(SubscriberRepository $subscriberRepository)
    {
        $this->subscriberRepository = $subscriberRepository;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function storeSubscriber(array $data)
    {
        return $this->subscriberRepository->create($data);
    }
}
