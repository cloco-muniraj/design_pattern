<?php

require '../vendor/autoload.php';

use App\Factory\NotificationFactory;

$notification = NotificationFactory::createNotification('email');
$notification->send('test email');

$notification = NotificationFactory::createNotification('sms');
$notification->send('test sms');