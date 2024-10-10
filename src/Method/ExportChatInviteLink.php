<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to generate a new primary invite link for a chat; any previously
 * generated primary link is revoked. The bot must be an administrator in the chat
 * for this to work and must have the appropriate administrator rights. Returns the
 * new invite link as <em>String</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class ExportChatInviteLink extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
    ) {
    }
}
