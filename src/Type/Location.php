<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a point on the map.
 *
 * @version Telegram Bot API 7.10
 */
final class Location extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Latitude as defined by the sender
         * @var float
         */
        public float $latitude,
        /**
         * Longitude as defined by the sender
         * @var float
         */
        public float $longitude,
        /**
         * The radius of uncertainty for the location, measured in meters; 0-1500
         * @var float
         */
        public ?float $horizontal_accuracy,
        /**
         * Time relative to the message sending date, during which the location can be
         * updated; in seconds. For active live locations only.
         * @var int
         */
        public ?int $live_period,
        /**
         * The direction in which user is moving, in degrees; 1-360. For active live
         * locations only.
         * @var int
         */
        public ?int $heading,
        /**
         * The maximum distance for proximity alerts about approaching another chat member,
         * in meters. For sent live locations only.
         * @var int
         */
        public ?int $proximity_alert_radius,
    ) {
    }
}
