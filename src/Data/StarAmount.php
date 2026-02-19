<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes an amount of Telegram Stars.
 */
final class StarAmount extends Data implements TelegramBotData
{
    public function __construct(
        /** Integer amount of Telegram Stars, rounded to 0; can be negative */
        public int $amount,
        /**
         * The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999; can be negative if and only if amount
         * is non-positive
         */
        public ?int $nanostar_amount,
    ) {
    }
}
