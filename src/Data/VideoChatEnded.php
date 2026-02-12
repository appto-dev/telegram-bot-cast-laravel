<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about a video chat ended in the chat.
 */
final class VideoChatEnded extends Data implements TelegramBotData
{
    public function __construct(
        /** Video chat duration in seconds */
        public int $duration,
    ) {
    }
}
