<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $mes;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mes)
    {
        $this->mes = $mes;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Mail::send('email', ['mes' => $this->mes], function ($message) {
            $message->from('m.hamaida7@gmail.com', 'John Doe');
            $message->to('m.hamaida7@gmail.com', 'Oday Alqarra');
         });
    }
}
