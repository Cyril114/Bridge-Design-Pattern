<?php

declare(strict_types=1);

namespace Bridge\Tests;

use Bridge\MessageSender;


final class FakeSender implements MessageSender
{
    /** @var array<int, array{recipient: string, message: string}> */
    public array $sentMessages = [];

    public function send(string $recipient, string $message): void
    {
        $this->sentMessages[] = ['recipient' => $recipient, 'message' => $message];
    }
}
