<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to ban a user in a group, a supergroup or a channel. In the case
 * of supergroups and channels, the user will not be able to return to the chat on
 * their own using invite links, etc., unless <a
 * href="#unbanchatmember">unbanned</a> first. The bot must be an administrator in
 * the chat for this to work and must have the appropriate administrator rights.
 * Returns <em>True</em> on success.
 */
final class BanChatMember extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target group or username of the target supergroup or
         * channel (in the format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier of the target user
         * @var int
         */
        public int $user_id,
        /**
         * Date when the user will be unbanned; Unix time. If user is banned for more than
         * 366 days or less than 30 seconds from the current time they are considered to be
         * banned forever. Applied for supergroups and channels only.
         * @var int
         */
        public ?int $until_date,
        /**
         * Pass <em>True</em> to delete all messages from the chat for the user that is
         * being removed. If <em>False</em>, the user will be able to see messages in the
         * group that were sent before the user was removed. Always <em>True</em> for
         * supergroups and channels.
         * @var bool
         */
        public ?bool $revoke_messages,
    ) {
    }
}
