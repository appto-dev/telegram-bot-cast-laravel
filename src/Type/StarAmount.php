<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class StarAmount extends Data implements TelegramType
{
    public function __construct(
        /** @var  int  Integer amount of Telegram Stars, rounded to 0; can be negative */
        public int $amount,
        /**
         * @var  int|null  The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999;
         * can be negative if and only if amount is non-positive
         */
        public ?int $nanostar_amount,
    ) {
    }
}
