<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TeacherPasswordResetEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $email_data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->email_data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->email_data['status_id']==1)
        {
         return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                    ->subject('Join the initiative | Hathayogis')
                    ->view('emails.teacher_password_reset_link', ['email_data' => $this->email_data]);
        }
        else
        {
        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                    ->subject('Hathayogis | Set new password')
                    ->view('emails.teacher_password_reset_link', ['email_data' => $this->email_data]);
        }
    }
}
