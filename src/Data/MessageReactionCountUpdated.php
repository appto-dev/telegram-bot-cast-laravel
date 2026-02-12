<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents reaction changes on a message with anonymous reactions.
 */
final class MessageReactionCountUpdated extends Data implements TelegramBotData
{
    public function __construct(
        /** The chat containing the message */
        public Chat $chat,
        /** Unique message identifier inside the chat */
        public int $message_id,
        /** Date of the change in Unix time */
        public int $date,
        /** List of reactions that are present on the message */
        public ReactionCount $reactions,
    ) {
    }
}
