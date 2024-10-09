<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents the <a href="#botcommandscope">scope</a> of bot commands, covering
 * all private chats.
 *
 * @version Telegram Bot API 7.10
 */
final class BotCommandScopeAllPrivateChats extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Scope type, must be all_private_chats
         * @var string
         */
        public string $type,
    ) {
    }
}
