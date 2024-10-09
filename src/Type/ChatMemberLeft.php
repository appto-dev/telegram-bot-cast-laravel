<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents a <a href="#chatmember">chat member</a> that isn't currently a member
 * of the chat, but may join it themselves.
 *
 * @version Telegram Bot API 7.10
 */
final class ChatMemberLeft extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * The member's status in the chat, always "left"
         * @var string
         */
        public string $status,
        /**
         * Information about the user
         * @var User
         */
        public User $user,
    ) {
    }
}
