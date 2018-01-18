<?php

namespace App\Notifications;

use Request;
use Illuminate\Bus\Queueable;
use Benlly\Lang\StringTranslator;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class MailResetPasswordToken extends Notification
{
    use Queueable;

    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;

    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        return (new MailMessage)
            ->subject('Mail Reset Password')
            ->from('sonphamfr2017@gmail.com', 'Phạm Văn Sơn')
            ->greeting('Xin chào')
            ->line('Mật khẩu mới của bạn là : ')
            ->line('Cảm ơn bạn đã sử dụng website của chúng tôi')
            ->line('Shop Thảo Vy kính chào quý khách');
    }
}
