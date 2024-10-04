<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * BotCommandScopeDefault
 *
 * Represents the default scope of bot commands. Default commands are used if no
 * commands with a narrower scope are specified for the user.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class BotCommandScopeDefault extends Dto implements TypeInterface
{
    public function __construct(
        /** Scope type, must be default */
        public string $type,
    ) {
    }
}
