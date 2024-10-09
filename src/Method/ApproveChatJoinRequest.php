<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to approve a chat join request. The bot must be an administrator
 * in the chat for this to work and must have the <em>can_invite_users</em>
 * administrator right. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class ApproveChatJoinRequest extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format @channelusername)
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
