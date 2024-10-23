<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\StoreSubscriberRequest;
use App\Models\Frontend\Contact;
use App\Services\ContactService;
use App\Services\SubscriberService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * @var SubscriberService
     */
    protected $subscriberService;

    /**
     * @param SubscriberService $subscriberService
     */
    public function __construct(SubscriberService $subscriberService)
    {
        $this->subscriberService = $subscriberService;
    }

    /**
     * @param StoreSubscriberRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreSubscriberRequest $request)
    {
        $this->subscriberService->storeSubscriber($request->validated());

        return redirect()->route('theme.index')->with('status', 'Subscribed Successfully');
    }
}

