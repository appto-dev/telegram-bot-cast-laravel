<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class StoryAreaTypeWeather extends Data implements TelegramType, StoryAreaType
{
    public function __construct(
        /** @var  string  Type of the area, always "weather" */
        public string $type,
        /** @var  float  Temperature, in degree Celsius */
        public float $temperature,
        /** @var  string  Emoji representing the weather */
        public string $emoji,
        /** @var  int  A color of the area background in the ARGB format */
        public int $background_color,
    ) {
    }
}
