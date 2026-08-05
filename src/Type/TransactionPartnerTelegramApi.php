<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class TransactionPartnerTelegramApi extends Data implements TelegramType, TransactionPartner
{
    public function __construct(
        /** @var  string  Type of the transaction partner, always "telegram_api" */
        public string $type,
        /** @var  int  The number of successful requests that exceeded regular limits and were therefore billed */
        public int $request_count,
    ) {
    }
}
