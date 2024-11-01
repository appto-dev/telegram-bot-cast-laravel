<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents the <a href="#botcommandscope">scope</a> of bot commands, covering
 * all administrators of a specific group or supergroup chat.
 *
 * @version Telegram Bot API 7.11
 */
final class BotCommandScopeChatAdministrators extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in
         * the format @supergroupusername)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Scope type, must be chat_administrators
         * @var string
         */
        public string $type = 'chat_administrators',
    ) {
    }
}
