<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * ChatMemberMember
 *
 * Represents a chat member that has no additional privileges or restrictions.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ChatMemberMember extends Dto implements TypeInterface
{
    public function __construct(
        /** The member's status in the chat, always "member" */
        public string $status,
        /** Information about the user */
        public User $user,
    ) {
    }
}
