<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EngagementNotification extends Mailable
{
    use Queueable, SerializesModels;


    public $messageContent;

    /**
     * Create a new message instance.
     *
     * @param string $messageContent
     */
    public function __construct($messageContent)
    {
        $this->messageContent = $messageContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('A Client Reached Out to You')
            ->markdown('emails.plain') // Specify your Blade template
            ->with(['message' => $this->messageContent]); // Pass the message to the view
    }
}
