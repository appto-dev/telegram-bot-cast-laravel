<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents a <a href="#chatmember">chat member</a> that isn't currently a member
 * of the chat, but may join it themselves.
 */
final class ChatMemberLeft extends Data implements TelegramTypeInterface
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
