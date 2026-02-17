<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes the opening hours of a business.
 */
final class BusinessOpeningHours extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique name of the time zone for which the opening hours are defined */
        public string $time_zone_name,
        /**
         * List of time intervals describing business opening hours
         * @var BusinessOpeningHoursInterval[]
         */
        public array $opening_hours,
    ) {
    }
}
