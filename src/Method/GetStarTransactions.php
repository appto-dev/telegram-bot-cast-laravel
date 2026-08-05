<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class GetStarTransactions extends Data implements TelegramMethod
{
    public function __construct(
        /** @var  int|null  Number of transactions to skip in the response */
        public ?int $offset,
        /**
         * @var  int|null  The maximum number of transactions to be retrieved. Values between 1-100 are
         * accepted. Defaults to 100.
         */
        public ?int $limit,
    ) {
    }
}
