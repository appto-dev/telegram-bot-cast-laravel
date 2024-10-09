<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents a <a href="#chatmember">chat member</a> that has no additional
 * privileges or restrictions.
 *
 * @version Telegram Bot API 7.10
 */
final class ChatMemberMember extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * The member's status in the chat, always "member"
         * @var string
         */
        public string $status,
        /**
         * Information about the user
         * @var User
         */
        public User $user,
        /**
         * Date when the user's subscription will expire; Unix time
         * @var int
         */
        public ?int $until_date,
    ) {
    }
}
