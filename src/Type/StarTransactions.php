<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Contains a list of Telegram Star transactions.
 *
 * @version Telegram Bot API 7.10
 */
final class StarTransactions extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * The list of transactions
         * @var StarTransaction
         */
        public StarTransaction $transactions,
    ) {
    }
}