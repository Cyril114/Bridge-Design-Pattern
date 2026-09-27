<?php

declare(strict_types=1);

namespace Bridge;


final class SmsSender implements MessageSender
{
    public function send(string $recipient, string $message): void
    {
        echo "SMS to {$recipient}: {$message}" . PHP_EOL;
    }
}
