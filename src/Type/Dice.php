<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class Dice extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Emoji on which the dice throw animation is based */
        public string $emoji,
        /**
         * @var  int  Value of the dice, 1-6 for "🎲", "🎯" and "🎳" base emoji, 1-5 for "🏀" and "⚽"
         * base emoji, 1-64 for "🎰" base emoji
         */
        public int $value,
    ) {
    }
}
