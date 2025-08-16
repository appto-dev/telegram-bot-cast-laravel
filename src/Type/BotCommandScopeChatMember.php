<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents the <a href="#botcommandscope">scope</a> of bot commands, covering a
 * specific member of a group or supergroup chat.
 */
final class BotCommandScopeChatMember extends Data implements TelegramTypeInterface
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
         * Unique identifier of the target user
         * @var int
         */
        public int $user_id,
        /**
         * Scope type, must be chat_member
         * @var string
         */
        public string $type = 'chat_member',
    ) {
    }
}
