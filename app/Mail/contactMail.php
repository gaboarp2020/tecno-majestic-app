<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class contactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name;
    public $last_name;
    public $country;
    public $company;
    public $business_sector;
    public $email;
    public $subject;
    public $content;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->last_name = $data['last_name'];
        $this->country = $data['country'];
        $this->company = $data['company'];
        $this->business_sector = $data['business_sector'];
        $this->email = $data['email'];
        $this->subject = $data['subject'];
        $this->content = $data['content'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // $name = $this->name;
        // $last_name = $this->last_name;
        // $country = $this->country;
        // $company = $this->company;
        // $business_sector = $this->business_sector;
        $email = $this->email;
        $subject = $this->subject;
        // $content = $this->content;

        return $this->view('emails.contact')->from($email)->subject($subject);
    }
}
