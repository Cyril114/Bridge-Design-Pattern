<?php

declare(strict_types=1);

namespace Bridge;


final class SenderFactory
{
    public static function create(Channel $channel): MessageSender
    {
        return match ($channel) {
            Channel::Email => new EmailSender(),
            Channel::Sms => new SmsSender(),
            Channel::Slack => new SlackSender(),
        };
    }
}
