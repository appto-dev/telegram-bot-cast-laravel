<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class BusinessOpeningHours extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Unique name of the time zone for which the opening hours are defined */
        public string $time_zone_name,
        /** @var  BusinessOpeningHoursInterval[]  List of time intervals describing business opening hours */
        public array $opening_hours,
    ) {
    }
}
