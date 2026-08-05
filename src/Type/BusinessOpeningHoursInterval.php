<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class BusinessOpeningHoursInterval extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int  The minute's sequence number in a week, starting on Monday, marking the start of the time
         * interval during which the business is open; 0 - 7 * 24 * 60
         */
        public int $opening_minute,
        /**
         * @var  int  The minute's sequence number in a week, starting on Monday, marking the end of the time
         * interval during which the business is open; 0 - 8 * 24 * 60
         */
        public int $closing_minute,
    ) {
    }
}
