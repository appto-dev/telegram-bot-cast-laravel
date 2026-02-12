<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to get up-to-date information about the chat. Returns a <a
 * href="https://core.telegram.org/bots/api#chatfullinfo">ChatFullInfo</a> object
 * on success.
 */
final class GetChat extends Data implements TelegramBotData
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
