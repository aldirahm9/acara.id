<?php

namespace App\Mail;

use App\Ticket;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Vinkla\Hashids\Facades\Hashids;

class TicketMail extends Mailable
{
    use Queueable, SerializesModels;


    public $ticket,$user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Ticket $ticket,User $user)
    {
        $this->ticket = $ticket;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Your ticket for ' . $this->ticket->event->name)
                    ->view('mail.ticket')
                    ->attachData(QrCode::format('png')->size(250)->generate(Hashids::connection('ticketuser')
                    ->encode($this->ticket->users()->wherePivot('user_id',$this->user->id)->first()->pivot->id)),'Ticket_'.$this->ticket->event->name . '.png',
                ['mime'=> 'application/png']);
    }
}
