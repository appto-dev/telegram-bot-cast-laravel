<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class SuggestedPostPrice extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string  Currency in which the post will be paid. Currently, must be one of "XTR" for Telegram
         * Stars or "TON" for TON grams.
         */
        public string $currency,
        /**
         * @var  int  The amount of the currency that will be paid for the post in the smallest units of the
         * currency, i.e. Telegram Stars or nanograms. Currently, price in Telegram Stars must be between 5 and
         * 100000, and price in nanograms must be between 10000000 and 10000000000000.
         */
        public int $amount,
    ) {
    }
}
