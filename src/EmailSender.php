<?php

declare(strict_types=1);

namespace Bridge;


final class EmailSender implements MessageSender
{
    public function send(string $recipient, string $message): void
    {
        echo "Email to {$recipient}: {$message}" . PHP_EOL;
    }
}
