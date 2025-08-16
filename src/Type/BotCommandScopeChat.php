<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents the <a href="#botcommandscope">scope</a> of bot commands, covering a
 * specific chat.
 */
final class BotCommandScopeChat extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in
         * the format @supergroupusername). Channel direct messages chats and channel chats
         * aren't supported.
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Scope type, must be chat
         * @var string
         */
        public string $type = 'chat',
    ) {
    }
}
