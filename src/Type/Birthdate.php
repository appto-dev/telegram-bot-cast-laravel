<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class Birthdate extends Data implements TelegramType
{
    public function __construct(
        /** @var  int  Day of the user's birth; 1-31 */
        public int $day,
        /** @var  int  Month of the user's birth; 1-12 */
        public int $month,
        /** @var  int|null  Year of the user's birth */
        public ?int $year,
    ) {
    }
}
