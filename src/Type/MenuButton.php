<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * MenuButton
 *
 * This object describes the bot's menu button in a private chat. It should be one
 * of
 *  - MenuButtonCommands
 *  - MenuButtonWebApp
 *  - MenuButtonDefault
 * If a menu
 * button other than MenuButtonDefault is set for a private chat, then it is
 * applied in the chat. Otherwise the default menu button is applied. By default,
 * the menu button opens the list of bot commands.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class MenuButton extends Dto implements TypeInterface
{
}
