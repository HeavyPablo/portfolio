<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    private mixed $name;
    private mixed $message_request;
    private mixed $email;
    private mixed $subject_request;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $email, $message, $subject_request)
    {
        $this->name = $name;
        $this->email = $email;
        $this->message_request = $message;
        $this->subject_request = $subject_request;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nueva solicitud: ' . $this->subject_request,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.new-request',
            with: [
                'name' => $this->name,
                'email' => $this->email,
                'mail' => $this->email,
                'subject_request' => $this->subject_request,
                'message_request' => $this->message_request
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
