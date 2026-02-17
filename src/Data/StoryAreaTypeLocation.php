<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\StoryAreaType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a story area pointing to a location. Currently, a story can have up to 10 location areas.
 */
final class StoryAreaTypeLocation extends Data implements TelegramBotData, StoryAreaType
{
    public function __construct(
        /** Type of the area, always "location" */
        public string $type,
        /** Location latitude in degrees */
        public float $latitude,
        /** Location longitude in degrees */
        public float $longitude,
        /** Address of the location */
        public ?LocationAddress $address,
    ) {
    }
}
