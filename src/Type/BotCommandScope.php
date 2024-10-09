<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents the scope to which bot commands are applied. Currently,
 * the following 7 scopes are supported:
 *  - <a href="#botcommandscopedefault">BotCommandScopeDefault</a>
 *  - <a href="#botcommandscopeallprivatechats">BotCommandScopeAllPrivateChats</a>
 *  - <a href="#botcommandscopeallgroupchats">BotCommandScopeAllGroupChats</a>
 *  - <a
 * href="#botcommandscopeallchatadministrators">BotCommandScopeAllChatAdministrators</a>
 *  - <a href="#botcommandscopechat">BotCommandScopeChat</a>
 *  - <a
 * href="#botcommandscopechatadministrators">BotCommandScopeChatAdministrators</a>
 *  - <a href="#botcommandscopechatmember">BotCommandScopeChatMember</a>
 *
 * @version Telegram Bot API 7.10
 */
final class BotCommandScope extends Data implements TelegramTypeContract
{
}
