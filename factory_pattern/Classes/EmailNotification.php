<?php

namespace App\Classes;

use App\Contracts\NotificationInterface;
class EmailNotification implements NotificationInterface {
    
    public function send($message)
    {
        echo "Sending Email " . $message . "\n";
    }
    
}