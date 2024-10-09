<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Describes the opening hours of a business.
 *
 * @version Telegram Bot API 7.10
 */
final class BusinessOpeningHours extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Unique name of the time zone for which the opening hours are defined
         * @var string
         */
        public string $time_zone_name,
        /**
         * List of time intervals describing business opening hours
         * @var array<BusinessOpeningHoursInterval>
         */
        public BusinessOpeningHoursInterval $opening_hours,
    ) {
    }
}
