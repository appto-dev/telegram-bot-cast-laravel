<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Contains a list of Telegram Star transactions.
 *
 * @version Telegram Bot API 7.11
 */
final class StarTransactions extends Data implements TelegramTypeInterface
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
