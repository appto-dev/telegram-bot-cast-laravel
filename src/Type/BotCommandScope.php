<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * BotCommandScope
 *
 * This object represents the scope to which bot commands are applied. Currently,
 * the following 7 scopes are supported:
 *  - BotCommandScopeDefault
 *  -
 * BotCommandScopeAllPrivateChats
 *  - BotCommandScopeAllGroupChats
 *  -
 * BotCommandScopeAllChatAdministrators
 *  - BotCommandScopeChat
 *  -
 * BotCommandScopeChatAdministrators
 *  - BotCommandScopeChatMember
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class BotCommandScope extends Dto implements TypeInterface
{
}
