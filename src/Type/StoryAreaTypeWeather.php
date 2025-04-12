<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a story area containing weather information. Currently, a story can
 * have up to 3 weather areas.
 */
final class StoryAreaTypeWeather extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the area, always "weather"
         * @var string
         */
        public string $type,
        /**
         * Temperature, in degree Celsius
         * @var float
         */
        public float $temperature,
        /**
         * Emoji representing the weather
         * @var string
         */
        public string $emoji,
        /**
         * A color of the area background in the ARGB format
         * @var int
         */
        public int $background_color,
    ) {
    }
}
