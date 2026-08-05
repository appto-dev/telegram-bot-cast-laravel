<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * Your bot can accept payments from Telegram users. Please see the
 * <a href="/bots/payments">introduction to payments</a> for more details on the process and how to set
 * up payments for your bot.
 */
class LabeledPrice extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Portion label */
        public string $label,
        /**
         * @var  int  Price of the product in the smallest units of the currency (integer, not float/double).
         * For example, for a price of US$ 1.45 pass amount = 145. See the exp parameter in currencies.json, it
         * shows the number of digits past the decimal point for each currency (2 for the majority of
         * currencies).
         */
        public int $amount,
    ) {
    }
}
