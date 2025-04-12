<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes a clickable area on a story media.
 */
final class StoryArea extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Position of the area
         * @var StoryAreaPosition
         */
        public StoryAreaPosition $position,
        /**
         * Type of the area
         * @var StoryAreaType
         */
        public StoryAreaType $type,
    ) {
    }
}
