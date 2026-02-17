<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about a video chat scheduled in the chat.
 */
final class VideoChatScheduled extends Data implements TelegramBotData
{
    public function __construct(
        /** Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator */
        public int $start_date,
    ) {
    }
}
