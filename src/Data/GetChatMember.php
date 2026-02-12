<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to get information about a member of a chat. The method is only
 * guaranteed to work for other users if the bot is an administrator in the chat.
 * Returns a <a href="https://core.telegram.org/bots/api#chatmember">ChatMember</a>
 * object on success.
 */
final class GetChatMember extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or
         * channel (in the format <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /** Unique identifier of the target user */
        public int $user_id,
    ) {
    }
}
