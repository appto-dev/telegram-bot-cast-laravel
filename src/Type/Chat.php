<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class Chat extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int  Unique identifier for this chat. This number may have more than 32 significant bits and
         * some programming languages may have difficulty/silent defects in interpreting it. But it has at most
         * 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing
         * this identifier.
         */
        public int $id,
        /** @var  string  Type of the chat, can be either "private", "group", "supergroup" or "channel" */
        public string $type,
        /** @var  string|null  Title, for supergroups, channels and group chats */
        public ?string $title,
        /** @var  string|null  Username, for private chats, supergroups and channels if available */
        public ?string $username,
        /** @var  string|null  First name of the other party in a private chat */
        public ?string $first_name,
        /** @var  string|null  Last name of the other party in a private chat */
        public ?string $last_name,
        /** @var  true|null  True, if the supergroup chat is a forum (has topics enabled) */
        public ?true $is_forum,
        /** @var  true|null  True, if the chat is the direct messages chat of a channel */
        public ?true $is_direct_messages,
    ) {
    }
}
