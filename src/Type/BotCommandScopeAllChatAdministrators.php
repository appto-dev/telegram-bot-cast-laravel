<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * BotCommandScopeAllChatAdministrators
 *
 * Represents the scope of bot commands, covering all group and supergroup chat
 * administrators.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class BotCommandScopeAllChatAdministrators extends Data implements TypeInterface
{
    public function __construct(
        /** Scope type, must be all_chat_administrators */
        public string $type,
    ) {
    }
}
