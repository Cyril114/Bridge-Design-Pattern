<?php

declare(strict_types=1);

namespace Bridge;


final class RegularNotification extends Notification
{
    public function notify(string $recipient, string $message): void
    {
        $this->sender->send($recipient, $message);
    }
}
