<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\MessageOrigin;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The message was originally sent on behalf of a chat to a group chat.
 */
final class MessageOriginChat extends Data implements TelegramBotData, MessageOrigin
{
    public function __construct(
        /** Type of the message origin, always "chat" */
        public string $type,
        /** Date the message was sent originally in Unix time */
        public int $date,
        /** Chat that sent the message originally */
        public Chat $sender_chat,
        /** For messages originally sent by an anonymous chat administrator, original message author signature */
        public ?string $author_signature,
    ) {
    }
}
