<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a service message about a change in auto-delete timer
 * settings.
 */
final class MessageAutoDeleteTimerChanged extends Data implements TelegramBotData
{
    public function __construct(
        /** New auto-delete time for messages in the chat; in seconds */
        public int $message_auto_delete_time,
    ) {
    }
}
