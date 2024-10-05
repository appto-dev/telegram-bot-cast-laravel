<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * MenuButtonCommands
 *
 * Represents a menu button, which opens the bot's list of commands.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class MenuButtonCommands extends Data implements TypeInterface
{
    public function __construct(
        /** Type of the button, must be commands */
        public string $type,
    ) {
    }
}
