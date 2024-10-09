<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Spatie\LaravelData\Data;

/**
 * Use this method to get information about a member of a chat. The method is only
 * guaranteed to work for other users if the bot is an administrator in the chat.
 * Returns a <a href="#chatmember">ChatMember</a> object on success.
 *
 * @version Telegram Bot API 7.10
 */
final class GetChatMember extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup or
         * channel (in the format @channelusername)
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
