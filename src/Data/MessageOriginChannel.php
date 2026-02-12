<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\MessageOrigin;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The message was originally sent to a channel chat.
 */
final class MessageOriginChannel extends Data implements TelegramBotData, MessageOrigin
{
    public function __construct(
        /** Type of the message origin, always "channel" */
        public string $type,
        /** Date the message was sent originally in Unix time */
        public int $date,
        /** Channel chat to which the message was originally sent */
        public Chat $chat,
        /** Unique message identifier inside the chat */
        public int $message_id,
        /** Signature of the original post author */
        public ?string $author_signature,
    ) {
    }
}
