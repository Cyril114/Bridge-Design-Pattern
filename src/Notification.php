<?php

declare(strict_types=1);

namespace Bridge;


abstract class Notification
{
    public function __construct(protected readonly MessageSender $sender)
    {
    }

    abstract public function notify(string $recipient, string $message): void;
}
