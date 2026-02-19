<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to edit a subscription invite link created by the bot. The bot must have the <em>can_invite_users</em>
 * administrator rights. Returns the edited invite link as a <a
 * href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a> object.
 */
final class EditChatSubscriptionInviteLink extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier for the target chat or username of the target channel (in the format <code>@channelusername</code>) */
        public int|string $chat_id,
        /** The invite link to edit */
        public string $invite_link,
        /** Invite link name; 0-32 characters */
        public ?string $name,
    ) {
    }
}
