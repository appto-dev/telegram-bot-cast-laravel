<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * ChatMemberLeft
 *
 * Represents a chat member that isn't currently a member of the chat, but may join
 * it themselves.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class ChatMemberLeft extends Data implements TypeInterface
{
    public function __construct(
        /** The member's status in the chat, always "left" */
        public string $status,
        /** Information about the user */
        public User $user,
    ) {
    }
}
