<?php

namespace App;


use App\Notifications\MailResetPasswordToken;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use  Notifiable;

    protected  $table = 'users';

    protected  $fillable = ['name','email','password'];

    protected  $hidden = ['password','remember_token'];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new MailResetPasswordToken($token));
    }
    public function customer()
    {
        return $this->hasOne('App\Customers');
    }
}
