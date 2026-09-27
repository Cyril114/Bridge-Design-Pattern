<?php

declare(strict_types=1);

namespace Bridge;


interface MessageSender
{
    public function send(string $recipient, string $message): void;
}
