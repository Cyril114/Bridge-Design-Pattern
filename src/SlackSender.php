<?php

declare(strict_types=1);

namespace Bridge;


final class SlackSender implements MessageSender
{
    public function send(string $recipient, string $message): void
    {
        echo "Slack DM to {$recipient}: {$message}" . PHP_EOL;
    }
}
