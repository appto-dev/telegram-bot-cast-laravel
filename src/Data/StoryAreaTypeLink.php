<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\StoryAreaType;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a story area pointing to an HTTP or tg:// link. Currently, a story can have up to 3 link areas.
 */
final class StoryAreaTypeLink extends Data implements TelegramBotData, StoryAreaType
{
    public function __construct(
        /** Type of the area, always "link" */
        public string $type,
        /** HTTP or tg:// URL to be opened when the area is clicked */
        public string $url,
    ) {
    }
}
