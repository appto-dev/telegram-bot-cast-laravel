<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to revoke an invite link created by the bot. If the primary link
 * is revoked, a new link is automatically generated. The bot must be an
 * administrator in the chat for this to work and must have the appropriate
 * administrator rights. Returns the revoked invite link as <a
 * href="#chatinvitelink">ChatInviteLink</a> object.
 */
final class RevokeChatInviteLink extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * The invite link to revoke
         * @var string
         */
        public string $invite_link,
    ) {
    }
}
