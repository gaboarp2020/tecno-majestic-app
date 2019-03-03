<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Controllers\Controller;
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

    }

    /**
     * Send data via email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function mail()
    {

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

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('info@tecnomajestic.com');
            $message->subject($data['subject']);
        });

    }
}
