<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubscriberRequest;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * @var Subscriber
     */
    protected $subscriber;

    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    /**
     * @param StoreSubscriberRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreSubscriberRequest $request)
    {
        $this->subscriber->create($request->validated());

        return redirect()->route('theme.index')->with('status', 'Subscribed Successfully');
    }
}
