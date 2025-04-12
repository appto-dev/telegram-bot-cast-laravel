<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a story area pointing to a location. Currently, a story can have up to
 * 10 location areas.
 */
final class StoryAreaTypeLocation extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the area, always "location"
         * @var string
         */
        public string $type,
        /**
         * Location latitude in degrees
         * @var float
         */
        public float $latitude,
        /**
         * Location longitude in degrees
         * @var float
         */
        public float $longitude,
        /**
         * Address of the location
         * @var LocationAddress
         */
        public ?LocationAddress $address,
    ) {
    }
}
