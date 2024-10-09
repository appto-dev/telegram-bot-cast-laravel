<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a chat.
 *
 * @version Telegram Bot API 7.10
 */
final class Chat extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Unique identifier for this chat. This number may have more than 32 significant
         * bits and some programming languages may have difficulty/silent defects in
         * interpreting it. But it has at most 52 significant bits, so a signed 64-bit
         * integer or double-precision float type are safe for storing this identifier.
         * @var int
         */
        public int $id,
        /**
         * Type of the chat, can be either "private", "group", "supergroup" or "channel"
         * @var string
         */
        public string $type,
        /**
         * Title, for supergroups, channels and group chats
         * @var string|null
         */
        public ?string $title,
        /**
         * Username, for private chats, supergroups and channels if available
         * @var string|null
         */
        public ?string $username,
        /**
         * First name of the other party in a private chat
         * @var string|null
         */
        public ?string $first_name,
        /**
         * Last name of the other party in a private chat
         * @var string|null
         */
        public ?string $last_name,
        /**
         * True, if the supergroup chat is a forum (has topics enabled)
         * @var true|null
         */
        public ?true $is_forum,
    ) {
    }
}
