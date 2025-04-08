<?php

namespace App\Listeners;

use App\Events\PostCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostCreatedNotification;
use Illuminate\Support\Facades\Log;


class SendPostNotification implements ShouldQueue
{
    use InteractsWithQueue;

    public function __construct()
    {
        //
    }

    public function handle(PostCreated $event): void
    {
        // Send email to admin
        Mail::to('admin@example.com')->send(
            new PostCreatedNotification($event->post)
        );
    }
}
