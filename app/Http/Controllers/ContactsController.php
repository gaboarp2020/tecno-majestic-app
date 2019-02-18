<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            'content' => 'required|min:10|max:255'
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

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email']);
            $message->to('info@tecnomajestic.com');
            $message->subject($data['subject']);
        });

        //return ['message' => '¡Mensaje enviado! Gracias por contactarnos'];

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
