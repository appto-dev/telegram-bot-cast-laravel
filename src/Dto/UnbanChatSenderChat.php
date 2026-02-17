<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an
 * administrator for this to work and must have the appropriate administrator rights. Returns <em>True</em> on
 * success.
 */
final class UnbanChatSenderChat extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format
         * <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /** Unique identifier of the target sender chat */
        public int $sender_chat_id,
    ) {
    }
}
