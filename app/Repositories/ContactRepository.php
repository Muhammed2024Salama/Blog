<?php

namespace App\Repositories;

use App\Models\Frontend\Contact;

class ContactRepository
{
    public function create(array $data)
    {
        return Contact::create($data);
    }
}
