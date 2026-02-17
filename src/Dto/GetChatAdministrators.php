<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to get a list of administrators in a chat, which aren't bots. Returns an Array of <a
 * href="https://core.telegram.org/bots/api#chatmember">ChatMember</a> objects.
 */
final class GetChatAdministrators extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or channel (in the format
         * <code>@channelusername</code>)
         */
        public int|string $chat_id,
    ) {
    }
}
