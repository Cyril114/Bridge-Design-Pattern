<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Bridge\Channel;
use Bridge\SenderFactory;
use Bridge\UrgentNotification;
use Bridge\RegularNotification;


$urgentEmail = new UrgentNotification(SenderFactory::create(Channel::Email));
$urgentEmail->notify('johndoe@gmail.com', 'Server is down!');

$regularSms = new RegularNotification(SenderFactory::create(Channel::Sms));
$regularSms->notify('0912345678', 'Your order has shipped.');

$urgentSlack = new UrgentNotification(SenderFactory::create(Channel::Slack));
$urgentSlack->notify('#ops-alerts', 'Database failover triggered.');
