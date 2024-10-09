<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to create an additional invite link for a chat. The bot must be
 * an administrator in the chat for this to work and must have the appropriate
 * administrator rights. The link can be revoked using the method <a
 * href="#revokechatinvitelink">revokeChatInviteLink</a>. Returns the new invite
 * link as <a href="#chatinvitelink">ChatInviteLink</a> object.
 *
 * @version Telegram Bot API 7.10
 */
final class CreateChatInviteLink extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format @channelusername)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Invite link name; 0-32 characters
         * @var string|null
         */
        public ?string $name,
        /**
         * Point in time (Unix timestamp) when the link will expire
         * @var int|null
         */
        public ?int $expire_date,
        /**
         * The maximum number of users that can be members of the chat simultaneously after
         * joining the chat via this invite link; 1-99999
         * @var int|null
         */
        public ?int $member_limit,
        /**
         * True, if users joining the chat via the link need to be approved by chat
         * administrators. If True, member_limit can't be specified
         * @var bool|null
         */
        public ?bool $creates_join_request,
    ) {
    }
}
