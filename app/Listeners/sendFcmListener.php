<?php

namespace App\Listeners;

use App\events\newPostEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;


use App\Fcm;

class sendFcmListener implements  ShouldQueue
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
     * @param  newPostEvent  $event
     * @return void
     */
    public function handle(newPostEvent $event)
    {   
        //sleep(100);
         //dd("from listener");
        Fcm::send_notification($event->post);
    }
}
