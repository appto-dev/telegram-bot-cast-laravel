<?php

namespace Appto\TelegramBot\Interfaces;

/**
 * This object describes the bot's menu button in a private chat. It should be one of
 *  - <a href="https://core.telegram.org/bots/api#menubuttoncommands">MenuButtonCommands</a>
 *  - <a href="https://core.telegram.org/bots/api#menubuttonwebapp">MenuButtonWebApp</a>
 *  - <a href="https://core.telegram.org/bots/api#menubuttondefault">MenuButtonDefault</a>
 * If a menu button other than <a
 * href="https://core.telegram.org/bots/api#menubuttondefault">MenuButtonDefault</a> is set for a private chat,
 * then it is applied in the chat. Otherwise the default menu button is applied. By default, the menu button
 * opens the list of bot commands.
 */
interface MenuButton
{
}
