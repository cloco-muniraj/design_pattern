<?php

namespace App\Classes;

use App\Contracts\NotificationInterface;
class SmsNotification implements NotificationInterface {
    
    public function send($message)
    {
        echo "Sending Sms " . $message . "\n";
    }
    
}