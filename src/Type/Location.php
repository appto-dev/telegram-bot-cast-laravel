<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class Location extends Data implements TelegramType
{
    public function __construct(
        /** @var  float  Latitude as defined by the sender */
        public float $latitude,
        /** @var  float  Longitude as defined by the sender */
        public float $longitude,
        /** @var  float|null  The radius of uncertainty for the location, measured in meters; 0-1500 */
        public ?float $horizontal_accuracy,
        /**
         * @var  int|null  Time relative to the message sending date, during which the location can be updated;
         * in seconds. For active live locations only.
         */
        public ?int $live_period,
        /**
         * @var  int|null  The direction in which user is moving, in degrees; 1-360. For active live locations
         * only.
         */
        public ?int $heading,
        /**
         * @var  int|null  The maximum distance for proximity alerts about approaching another chat member, in
         * meters. For sent live locations only.
         */
        public ?int $proximity_alert_radius,
    ) {
    }
}
