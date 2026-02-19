<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a point on the map.
 */
final class Location extends Data implements TelegramBotData
{
    public function __construct(
        /** Latitude as defined by the sender */
        public float $latitude,
        /** Longitude as defined by the sender */
        public float $longitude,
        /** The radius of uncertainty for the location, measured in meters; 0-1500 */
        public ?float $horizontal_accuracy,
        /**
         * Time relative to the message sending date, during which the location can be updated; in seconds. For active live
         * locations only.
         */
        public ?int $live_period,
        /** The direction in which user is moving, in degrees; 1-360. For active live locations only. */
        public ?int $heading,
        /**
         * The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations
         * only.
         */
        public ?int $proximity_alert_radius,
    ) {
    }
}
