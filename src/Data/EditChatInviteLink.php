<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to edit a non-primary invite link created by the bot. The bot
 * must be an administrator in the chat for this to work and must have the
 * appropriate administrator rights. Returns the edited invite link as a <a
 * href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a>
 * object.
 */
final class EditChatInviteLink extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /** The invite link to edit */
        public string $invite_link,
        /** Invite link name; 0-32 characters */
        public ?string $name,
        /** Point in time (Unix timestamp) when the link will expire */
        public ?int $expire_date,
        /**
         * The maximum number of users that can be members of the chat simultaneously after
         * joining the chat via this invite link; 1-99999
         */
        public ?int $member_limit,
        /**
         * <em>True</em>, if users joining the chat via the link need to be approved by
         * chat administrators. If <em>True</em>, <em>member_limit</em> can't be specified
         */
        public ?bool $creates_join_request,
    ) {
    }
}
