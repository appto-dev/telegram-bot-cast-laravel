<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a unique message identifier.
 */
final class MessageId extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique message identifier. In specific instances (e.g., message containing a video sent to a big chat), the server might
         * automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant
         * message will be unusable until it is actually sent
         */
        public int $message_id,
    ) {
    }
}
