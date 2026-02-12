<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to ban a user in a group, a supergroup or a channel. In the case
 * of supergroups and channels, the user will not be able to return to the chat on
 * their own using invite links, etc., unless <a
 * href="https://core.telegram.org/bots/api#unbanchatmember">unbanned</a> first.
 * The bot must be an administrator in the chat for this to work and must have the
 * appropriate administrator rights. Returns <em>True</em> on success.
 */
final class BanChatMember extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target group or username of the target supergroup or
         * channel (in the format <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /** Unique identifier of the target user */
        public int $user_id,
        /**
         * Date when the user will be unbanned; Unix time. If user is banned for more than
         * 366 days or less than 30 seconds from the current time they are considered to be
         * banned forever. Applied for supergroups and channels only.
         */
        public ?int $until_date,
        /**
         * Pass <em>True</em> to delete all messages from the chat for the user that is
         * being removed. If <em>False</em>, the user will be able to see messages in the
         * group that were sent before the user was removed. Always <em>True</em> for
         * supergroups and channels.
         */
        public ?bool $revoke_messages,
    ) {
    }
}
