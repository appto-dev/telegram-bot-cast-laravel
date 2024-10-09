<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents the <a href="#botcommandscope">scope</a> of bot commands, covering
 * all group and supergroup chats.
 *
 * @version Telegram Bot API 7.10
 */
final class BotCommandScopeAllGroupChats extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Scope type, must be all_group_chats
         * @var string
         */
        public string $type,
    ) {
    }
}
