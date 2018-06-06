<?php

namespace App\Mail;

use App\User;
use App\Venue;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VenueBookRequestOwner extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The user instance.
     *
     * @var User
     */
    protected $user;

    /**
     * The venue instance.
     *
     * @var Venue
     */
    protected $venue;

    /**
     * The booking number.
     *
     * @var String
     */
    protected $booking_number;

    /**
     * Create a new message instance.
     *
     * @return void
     */
        public function __construct(Venue $venue, User $user, String $booking_number)
    {
        $this->venue = $venue;
        $this->user = $user;
        $this->booking_number = $booking_number;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Dostałeś zapytanie na '. $this->venue->name)
            ->markdown('emails.venue-book-request-owner')
            ->with([
                'name' => $this->user->first_name,
                'venue_name' => $this->venue->name,
                'booking_number' => $this->booking_number,
            ]);
    }
}
