<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to get up-to-date information about the chat. Returns a <a
 * href="https://core.telegram.org/bots/api#chatfullinfo">ChatFullInfo</a> object
 * on success.
 */
final class GetChat extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or
         * channel (in the format <code>@channelusername</code>)
         */
        public int|string $chat_id,
    ) {
    }
}
