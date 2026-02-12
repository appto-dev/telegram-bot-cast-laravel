<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\BotCommandScope;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents the <a
 * href="https://core.telegram.org/bots/api#botcommandscope">scope</a> of bot
 * commands, covering all private chats.
 */
final class BotCommandScopeAllPrivateChats extends Data implements TelegramBotData, BotCommandScope
{
    public function __construct(
        /** Scope type, must be all_private_chats */
        public string $type,
    ) {
    }
}
