<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a chat.
 */
final class Chat extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may
         * have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or
         * double-precision float type are safe for storing this identifier.
         */
        public int $id,
        /** Type of the chat, can be either "private", "group", "supergroup" or "channel" */
        public string $type,
        /** Title, for supergroups, channels and group chats */
        public ?string $title,
        /** Username, for private chats, supergroups and channels if available */
        public ?string $username,
        /** First name of the other party in a private chat */
        public ?string $first_name,
        /** Last name of the other party in a private chat */
        public ?string $last_name,
        /** True, if the supergroup chat is a forum (has topics enabled) */
        public ?true $is_forum,
        /** True, if the chat is the direct messages chat of a channel */
        public ?true $is_direct_messages,
    ) {
    }
}
