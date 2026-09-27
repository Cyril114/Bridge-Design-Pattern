<?php

declare(strict_types=1);

namespace Bridge\Tests;

use Bridge\UrgentNotification;
use Bridge\RegularNotification;
use PHPUnit\Framework\TestCase;

final class NotificationTest extends TestCase
{
    public function testUrgentNotificationPrefixesMessage(): void
    {
        $fake = new FakeSender();
        $notification = new UrgentNotification($fake);

        $notification->notify('test@example.com', 'Disk almost full');

        $this->assertSame('test@example.com', $fake->sentMessages[0]['recipient']);
        $this->assertSame('[URGENT] Disk almost full', $fake->sentMessages[0]['message']);
    }

    public function testRegularNotificationDoesNotPrefixMessage(): void
    {
        $fake = new FakeSender();
        $notification = new RegularNotification($fake);

        $notification->notify('test@example.com', 'Order shipped');

        $this->assertSame('Order shipped', $fake->sentMessages[0]['message']);
    }
}
