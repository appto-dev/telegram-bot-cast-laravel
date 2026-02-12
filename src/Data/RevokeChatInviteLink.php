<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to revoke an invite link created by the bot. If the primary link
 * is revoked, a new link is automatically generated. The bot must be an
 * administrator in the chat for this to work and must have the appropriate
 * administrator rights. Returns the revoked invite link as <a
 * href="https://core.telegram.org/bots/api#chatinvitelink">ChatInviteLink</a>
 * object.
 */
final class RevokeChatInviteLink extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier of the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /** The invite link to revoke */
        public string $invite_link,
    ) {
    }
}
