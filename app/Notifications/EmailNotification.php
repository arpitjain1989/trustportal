<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmailNotification extends Notification
{
    use Queueable;
	private $offerData;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($offerData)
    {
        $this->offerData = $offerData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
         return (new MailMessage)                    
          ->greeting($this->offerData['greeting'])
          ->subject($this->offerData['subject'])
            ->line($this->offerData['body'])
            ->line($this->offerData['line2'])
             ->line($this->offerData['line3'])
              ->line($this->offerData['line4'])
               ->line($this->offerData['line5'])
              
            ->action($this->offerData['offerText'], $this->offerData['offerUrl'])
            ->line($this->offerData['thanks']);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'offer_id' => $this->offerData['offer_id']
        ];
    }
}
