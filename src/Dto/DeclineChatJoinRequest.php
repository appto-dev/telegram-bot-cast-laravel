<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to decline a chat join request. The bot must be an administrator in the chat for this to work
 * and must have the <em>can_invite_users</em> administrator right. Returns <em>True</em> on success.
 */
final class DeclineChatJoinRequest extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format
         * <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /** Unique identifier of the target user */
        public int $user_id,
    ) {
    }
}
