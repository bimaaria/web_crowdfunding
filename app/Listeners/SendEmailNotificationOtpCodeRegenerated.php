<?php

namespace App\Listeners;

use App\Events\RegenerateOtpCodeEvent;
use App\Mail\RegenerateOtpCodeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;

class SendEmailNotificationOtpCodeRegenerated
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RegenerateOtpCodeEvent  $event
     * @return void
     */
    public function handle(RegenerateOtpCodeEvent $event)
    {
        Mail::to($event->user)->send(new RegenerateOtpCodeMail($event->user));
    }
}
