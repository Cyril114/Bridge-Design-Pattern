# Bridge Design Pattern — PHP Notification System

IPT10 Midterm Project — Bridge Design Pattern

## What this demonstrates

Decouples *what kind* of notification is sent (Urgent, Regular — the
Abstraction hierarchy) from *how* it is sent (Email, SMS, Slack — the
Implementor hierarchy), so either hierarchy can grow without touching
the other. See `before-naive/NaiveNotifications.php` for what the same
system looks like without the pattern applied.

## Requirements

- PHP >= 8.3
- Composer

## Setup

```bash
composer install
```

## Run the demo

```bash
php demo.php
```

## Run the tests

```bash
vendor/bin/phpunit tests
```

## Check for syntax errors (for the submission screenshot)

```bash
php -l demo.php
for f in src/*.php; do php -l "$f"; done
```

## Structure

```
src/
  Channel.php              # backed enum of supported channels
  MessageSender.php         # Implementor interface
  EmailSender.php            # ConcreteImplementor
  SmsSender.php               # ConcreteImplementor
  SlackSender.php              # ConcreteImplementor (added w/o touching existing classes)
  SenderFactory.php             # builds a sender from a Channel via match()
  Notification.php                # Abstraction
  UrgentNotification.php           # RefinedAbstraction
  RegularNotification.php           # RefinedAbstraction
tests/
  FakeSender.php              # test double used instead of a real sender
  NotificationTest.php         # unit tests using the fake
before-naive/
  NaiveNotifications.php         # comparison: same system without Bridge
demo.php                          # usage example
```

## Reference

Gamma, E., Helm, R., Johnson, R., & Vlissides, J. (1994). *Design
patterns: Elements of reusable object-oriented software*. Addison-Wesley.
