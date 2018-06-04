<?php

namespace App\Mail;

use App\User;
use App\Venue;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VenueConfirmed extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The user instance.
     *
     * @var Venue
     */
    protected $user;

    /**
     * The venue instance.
     *
     * @var Venue
     */
    protected $venue;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Venue $venue, User $user)
    {
        $this->venue = $venue;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.venue-confirmed')
            ->with([
                'name' => $this->user->first_name,
                'venue_name' => $this->venue->name,
            ]);
    }
}
