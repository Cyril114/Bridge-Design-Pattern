<?php

declare(strict_types=1);

namespace Bridge;


enum Channel: string
{
    case Email = 'email';
    case Sms = 'sms';
    case Slack = 'slack';
}
