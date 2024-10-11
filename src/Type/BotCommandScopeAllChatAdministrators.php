<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents the <a href="#botcommandscope">scope</a> of bot commands, covering
 * all group and supergroup chat administrators.
 *
 * @version Telegram Bot API 7.10
 */
final class BotCommandScopeAllChatAdministrators extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Scope type, must be all_chat_administrators
         * @var string
         */
        public string $type = 'all_chat_administrators',
    ) {
    }
}
