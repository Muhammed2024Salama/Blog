<?php

namespace App\Repositories;

use App\Models\Frontend\Subscriber;

class SubscriberRepository
{
    /**
     * @var Subscriber
     */
    protected $subscriber;

    /**
     * @param Subscriber $subscriber
     */
    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        return $this->subscriber->create($data);
    }
}
