<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a portion of the price for goods or services.
 *
 * @version Telegram Bot API 7.10
 */
final class LabeledPrice extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Portion label
         * @var string
         */
        public string $label,
        /**
         * Price of the product in the smallest units of the currency (integer, not
         * float/double). For example, for a price of US$ 1.45 pass amount = 145. See the
         * exp parameter in currencies.json, it shows the number of digits past the decimal
         * point for each currency (2 for the majority of currencies).
         * @var int
         */
        public int $amount,
    ) {
    }
}
