<?php

namespace Appto\TelegramBot\Interfaces;

/**
 * This object represents a reply markup that can be attached to a message. It can be one of:
 *  - <a href="#inlinekeyboardmarkup">InlineKeyboardMarkup</a> — an inline keyboard that appears next to the
 * message and contains buttons of type <a href="#inlinekeyboardbutton">InlineKeyboardButton</a>
 *  - <a href="#replykeyboardmarkup">ReplyKeyboardMarkup</a> — a custom reply keyboard with button rows of type
 * <a href="#keyboardbutton">KeyboardButton</a>.
 *  - <a href="#replykeyboardremove">ReplyKeyboardRemove</a> — removes the current custom reply keyboard and
 * displays the default letter-keyboard.
 *  - <a href="#forcereply">ForceReply</a> — forces the user to reply to a specific message by displaying the
 * reply interface.
 */
interface ReplyMarkup
{
}
