<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Mail\Mailer;
class SendWelcomEmail extends Job implements ShouldQueue
{
    use InteractsWithQueue, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * this method will be called when controller dispaches SendWelcomeEmail job
     *
     * @return void
     */
    public function handle(Mailer $mail)
    {
        
        $mail->send('email.view',["data"=>"data"],function($message){
            $message->from('mshibli786@gmail.com','Syed Shibli');
            $message->to('syed.shibli@daffodilsw.com');
            \Log::info("message is sent");

        });
    }
}
