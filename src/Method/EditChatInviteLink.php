<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to edit a non-primary invite link created by the bot. The bot
 * must be an administrator in the chat for this to work and must have the
 * appropriate administrator rights. Returns the edited invite link as a <a
 * href="#chatinvitelink">ChatInviteLink</a> object.
 *
 * @version Telegram Bot API 7.10
 */
final class EditChatInviteLink extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * The invite link to edit
         * @var string
         */
        public string $invite_link,
        /**
         * Invite link name; 0-32 characters
         * @var string
         */
        public ?string $name,
        /**
         * Point in time (Unix timestamp) when the link will expire
         * @var int
         */
        public ?int $expire_date,
        /**
         * The maximum number of users that can be members of the chat simultaneously after
         * joining the chat via this invite link; 1-99999
         * @var int
         */
        public ?int $member_limit,
        /**
         * <em>True</em>, if users joining the chat via the link need to be approved by
         * chat administrators. If <em>True</em>, <em>member_limit</em> can't be specified
         * @var bool
         */
        public ?bool $creates_join_request,
    ) {
    }
}
