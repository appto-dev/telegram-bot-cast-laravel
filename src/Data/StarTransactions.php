<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Contains a list of Telegram Star transactions.
 */
final class StarTransactions extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * The list of transactions
         * @var StarTransaction[]
         */
        public array $transactions,
    ) {
    }
}
