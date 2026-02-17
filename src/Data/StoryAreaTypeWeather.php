<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\StoryAreaType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a story area containing weather information. Currently, a story can have up to 3 weather areas.
 */
final class StoryAreaTypeWeather extends Data implements TelegramBotData, StoryAreaType
{
    public function __construct(
        /** Type of the area, always "weather" */
        public string $type,
        /** Temperature, in degree Celsius */
        public float $temperature,
        /** Emoji representing the weather */
        public string $emoji,
        /** A color of the area background in the ARGB format */
        public int $background_color,
    ) {
    }
}
