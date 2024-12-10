<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to get information about a member of a chat. The method is only
 * guaranteed to work for other users if the bot is an administrator in the chat.
 * Returns a <a href="#chatmember">ChatMember</a> object on success.
 */
final class GetChatMember extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or
         * channel (in the format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Unique identifier of the target user
         * @var int
         */
        public int $user_id,
    ) {
    }
}
