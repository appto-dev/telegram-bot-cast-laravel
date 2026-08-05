<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class RefundStarPayment extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int  Identifier of the user whose payment will be refunded */
        public int $user_id,
        /** @var  string  Telegram payment identifier */
        public string $telegram_payment_charge_id,
    ) {
    }
}
