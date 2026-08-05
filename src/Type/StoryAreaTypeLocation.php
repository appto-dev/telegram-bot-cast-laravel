<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class StoryAreaTypeLocation extends Data implements TelegramType, StoryAreaType
{
    public function __construct(
        /** @var  string  Type of the area, always "location" */
        public string $type,
        /** @var  float  Location latitude in degrees */
        public float $latitude,
        /** @var  float  Location longitude in degrees */
        public float $longitude,
        /** @var  LocationAddress|null  Address of the location */
        public ?LocationAddress $address,
    ) {
    }
}
