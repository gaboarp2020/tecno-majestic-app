<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Mail\contactMail;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|string',
            'last_name' => 'required|string',
            'country' => 'nullable|string',
            'company' => 'nullable|string',
            'business_sector' => 'nullable|string',
            'email' => 'required|email',
            'subject' => 'required|min:3',
            'content' => 'required|min:10|max:255',
        ]);

        Contact::forceCreate([
            'name' => request('name'),
            'last_name' => request('last_name'),
            'country' => request('country'),
            'company' => request('company'),
            'business_sector' => request('business_sector'),
            'email' => request('email'),
            'subject' => request('subject'),
            'content' => request('content'),
        ]);

        $data = array(
            'name' => request('name'),
            'last_name' => request('last_name'),
            'country' => request('country'),
            'company' => request('company'),
            'business_sector' => request('business_sector'),
            'email' => request('email'),
            'subject' => request('subject'),
            'content' => request('content'),
        );

        Mail::to('tecnomajestic@gmail.com')->send(new contactMail($data));

    }
}
