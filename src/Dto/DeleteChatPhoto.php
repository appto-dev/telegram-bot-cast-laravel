<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be an
 * administrator in the chat for this to work and must have the appropriate administrator rights. Returns
 * <em>True</em> on success.
 */
final class DeleteChatPhoto extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format
         * <code>@channelusername</code>)
         */
        public int|string $chat_id,
    ) {
    }
}
