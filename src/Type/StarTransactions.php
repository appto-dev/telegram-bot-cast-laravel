<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class StarTransactions extends Data implements TelegramType
{
    public function __construct(
        /** @var  StarTransaction[]  The list of transactions */
        public array $transactions,
    ) {
    }
}
