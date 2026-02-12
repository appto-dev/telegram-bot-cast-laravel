<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Returns the bot's Telegram Star transactions in chronological order. On success,
 * returns a <a
 * href="https://core.telegram.org/bots/api#startransactions">StarTransactions</a>
 * object.
 */
final class GetStarTransactions extends Data implements TelegramBotData
{
    public function __construct(
        /** Number of transactions to skip in the response */
        public ?int $offset,
        /**
         * The maximum number of transactions to be retrieved. Values between 1-100 are
         * accepted. Defaults to 100.
         */
        public ?int $limit,
    ) {
    }
}
