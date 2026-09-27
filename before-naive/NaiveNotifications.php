<?php

declare(strict_types=1);



final class UrgentEmailNotification
{
    public function notify(string $recipient, string $message): void
    {
        echo "Email to {$recipient}: [URGENT] {$message}" . PHP_EOL;
    }
}

final class UrgentSmsNotification
{
    public function notify(string $recipient, string $message): void
    {
        echo "SMS to {$recipient}: [URGENT] {$message}" . PHP_EOL;
    }
}

final class RegularEmailNotification
{
    public function notify(string $recipient, string $message): void
    {
        echo "Email to {$recipient}: {$message}" . PHP_EOL;
    }
}

final class RegularSmsNotification
{
    public function notify(string $recipient, string $message): void
    {
        echo "SMS to {$recipient}: {$message}" . PHP_EOL;
    }
}


