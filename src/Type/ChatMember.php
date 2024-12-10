<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object contains information about one member of a chat. Currently, the
 * following 6 types of chat members are supported:
 *  - <a href="#chatmemberowner">ChatMemberOwner</a>
 *  - <a href="#chatmemberadministrator">ChatMemberAdministrator</a>
 *  - <a href="#chatmembermember">ChatMemberMember</a>
 *  - <a href="#chatmemberrestricted">ChatMemberRestricted</a>
 *  - <a href="#chatmemberleft">ChatMemberLeft</a>
 *  - <a href="#chatmemberbanned">ChatMemberBanned</a>
 */
final class ChatMember extends Data implements TelegramTypeInterface
{
}
