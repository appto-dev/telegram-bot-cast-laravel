<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\StoryAreaType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a clickable area on a story media.
 */
final class StoryArea extends Data implements TelegramBotData
{
    public function __construct(
        /** Position of the area */
        public StoryAreaPosition $position,
        /** Type of the area */
        public StoryAreaType $type,
    ) {
    }
}
