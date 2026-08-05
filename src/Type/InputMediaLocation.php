<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class InputMediaLocation extends Data implements TelegramType, InputPollMedia, InputPollOptionMedia
{
    public function __construct(
        /** @var  string  Type of the media, must be location */
        public string $type,
        /** @var  float  Latitude of the location */
        public float $latitude,
        /** @var  float  Longitude of the location */
        public float $longitude,
        /** @var  float|null  The radius of uncertainty for the location, measured in meters; 0-1500 */
        public ?float $horizontal_accuracy,
    ) {
    }
}
