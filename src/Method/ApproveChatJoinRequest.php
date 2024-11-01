<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to approve a chat join request. The bot must be an administrator
 * in the chat for this to work and must have the <em>can_invite_users</em>
 * administrator right. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.11
 */
final class ApproveChatJoinRequest extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier of the target user
         * @var int
         */
        public int $user_id,
    ) {
    }
}
