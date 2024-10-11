<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes the bot's menu button in a private chat. It should be one
 * of
 *  - <a href="#menubuttoncommands">MenuButtonCommands</a>
 *  - <a href="#menubuttonwebapp">MenuButtonWebApp</a>
 *  - <a href="#menubuttondefault">MenuButtonDefault</a>
 * If a menu button other than <a href="#menubuttondefault">MenuButtonDefault</a>
 * is set for a private chat, then it is applied in the chat. Otherwise the default
 * menu button is applied. By default, the menu button opens the list of bot
 * commands.
 *
 * @version Telegram Bot API 7.10
 */
final class MenuButton extends Data implements TelegramTypeInterface
{
}
