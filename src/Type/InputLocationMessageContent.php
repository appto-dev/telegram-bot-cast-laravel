<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents the <a href="#inputmessagecontent">content</a> of a location message
 * to be sent as the result of an inline query.
 *
 * @version Telegram Bot API 7.10
 */
final class InputLocationMessageContent extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Latitude of the location in degrees
         * @var float
         */
        public float $latitude,
        /**
         * Longitude of the location in degrees
         * @var float
         */
        public float $longitude,
        /**
         * The radius of uncertainty for the location, measured in meters; 0-1500
         * @var float|null
         */
        public ?float $horizontal_accuracy,
        /**
         * Period in seconds during which the location can be updated, should be between 60
         * and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.
         * @var int|null
         */
        public ?int $live_period,
        /**
         * For live locations, a direction in which the user is moving, in degrees. Must be
         * between 1 and 360 if specified.
         * @var int|null
         */
        public ?int $heading,
        /**
         * For live locations, a maximum distance for proximity alerts about approaching
         * another chat member, in meters. Must be between 1 and 100000 if specified.
         * @var int|null
         */
        public ?int $proximity_alert_radius,
    ) {
    }
}
