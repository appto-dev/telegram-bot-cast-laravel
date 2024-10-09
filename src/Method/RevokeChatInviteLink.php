<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to revoke an invite link created by the bot. If the primary link
 * is revoked, a new link is automatically generated. The bot must be an
 * administrator in the chat for this to work and must have the appropriate
 * administrator rights. Returns the revoked invite link as <a
 * href="#chatinvitelink">ChatInviteLink</a> object.
 *
 * @version Telegram Bot API 7.10
 */
final class RevokeChatInviteLink extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier of the target chat or username of the target channel (in the
         * format @channelusername)
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
