<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class PaidMediaPurchased extends Data implements TelegramType
{
    public function __construct(
        /** @var  User  User who purchased the media */
        public User $from,
        /** @var  string  Bot-specified paid media payload */
        public string $paid_media_payload,
    ) {
    }
}
