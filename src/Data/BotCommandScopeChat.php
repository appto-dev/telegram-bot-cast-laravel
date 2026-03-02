<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\BotCommandScope;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents the <a href="https://core.telegram.org/bots/api#botcommandscope">scope</a> of bot commands,
 * covering a specific chat.
 */
final class BotCommandScopeChat extends Data implements TelegramBotData, BotCommandScope
{
    public function __construct(
        /** Scope type, must be chat */
        public string $type,
        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format
         * @supergroupusername). Channel direct messages chats and channel chats aren't supported.
         */
        public int|string $chat_id,
    ) {
    }
}
