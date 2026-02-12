<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a story.
 */
final class Story extends Data implements TelegramBotData
{
    public function __construct(
        /** Chat that posted the story */
        public Chat $chat,
        /** Unique identifier for the story in the chat */
        public int $id,
    ) {
    }
}
