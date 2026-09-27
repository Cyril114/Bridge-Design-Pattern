<?php

declare(strict_types=1);

namespace Bridge;

final class UrgentNotification extends Notification
{
    public function notify(string $recipient, string $message): void
    {
        $this->sender->send($recipient, "[URGENT] {$message}");
    }
}
