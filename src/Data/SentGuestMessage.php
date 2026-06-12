<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes an inline message sent by a guest bot.
 */
final class SentGuestMessage extends Data implements TelegramBotData
{
    public function __construct(
        /** Identifier of the sent inline message */
        public string $inline_message_id,
    ) {
    }
}
