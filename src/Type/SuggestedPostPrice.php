<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Desribes price of a suggested post.
 */
final class SuggestedPostPrice extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Currency in which the post will be paid. Currently, must be one of "XTR" for
         * Telegram Stars or "TON" for toncoins
         * @var string
         */
        public string $currency,
        /**
         * The amount of the currency that will be paid for the post in the smallest units
         * of the currency, i.e. Telegram Stars or nanotoncoins. Currently, price in
         * Telegram Stars must be between 5 and 100000, and price in nanotoncoins must be
         * between 10000000 and 10000000000000.
         * @var int
         */
        public int $amount,
    ) {
    }
}
