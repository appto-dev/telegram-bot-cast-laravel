<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * BotCommandScopeAllGroupChats
 *
 * Represents the scope of bot commands, covering all group and supergroup chats.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class BotCommandScopeAllGroupChats extends Data implements TypeInterface
{
    public function __construct(
        /** Scope type, must be all_group_chats */
        public string $type,
    ) {
    }
}
