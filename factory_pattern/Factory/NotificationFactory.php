<?php
namespace App\Factory;

use App\Classes\EmailNotification;
use App\Classes\SmsNotification;

class NotificationFactory {
    public static function createNotification($type)
    {
        switch ($type) {
            case 'email':
                return new EmailNotification();
            case 'sms':
                return new SmsNotification();
            default:
                throw new \Exception("Invalid notification type");
        }
    }
}