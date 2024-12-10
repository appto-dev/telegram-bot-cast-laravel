<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents the <a href="#botcommandscope">scope</a> of bot commands, covering
 * all private chats.
 */
final class BotCommandScopeAllPrivateChats extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Scope type, must be all_private_chats
         * @var string
         */
        public string $type = 'all_private_chats',
    ) {
    }
}
