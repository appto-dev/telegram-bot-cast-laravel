<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Describes an interval of time during which a business is open.
 *
 * @version Telegram Bot API 7.10
 */
final class BusinessOpeningHoursInterval extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * The minute's sequence number in a week, starting on Monday, marking the start of
         * the time interval during which the business is open; 0 - 7 * 24 * 60
         * @var int
         */
        public int $opening_minute,
        /**
         * The minute's sequence number in a week, starting on Monday, marking the end of
         * the time interval during which the business is open; 0 - 8 * 24 * 60
         * @var int
         */
        public int $closing_minute,
    ) {
    }
}
