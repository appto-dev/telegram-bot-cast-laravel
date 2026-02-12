<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to get the list of boosts added to a chat by a user. Requires
 * administrator rights in the chat. Returns a <a
 * href="https://core.telegram.org/bots/api#userchatboosts">UserChatBoosts</a>
 * object.
 */
final class GetUserChatBoosts extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier for the chat or username of the channel (in the format
         * <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /** Unique identifier of the target user */
        public int $user_id,
    ) {
    }
}
