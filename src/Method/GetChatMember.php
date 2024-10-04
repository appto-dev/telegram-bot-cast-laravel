<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ChatMember;
use Spatie\LaravelData\Data;

/**
 * GetChatMember
 *
 * Use this method to get information about a member of a chat. The method is only
 * guaranteed to work for other users if the bot is an administrator in the chat.
 * Returns a ChatMember object on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class GetChatMember extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ChatMember::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target
         * supergroup or channel (in the format @channelusername)
         */
        public int|string $chat_id,
        /** Unique identifier of the target user */
        public int $user_id,
    ) {
    }
}
