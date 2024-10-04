<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\UserChatBoosts;
use Spatie\LaravelData\Data;

/**
 * GetUserChatBoosts
 *
 * Use this method to get the list of boosts added to a chat by a user. Requires
 * administrator rights in the chat. Returns a UserChatBoosts object.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class GetUserChatBoosts extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = UserChatBoosts::class;

    public function __construct(
        /**
         * Unique identifier for the chat or username of the channel (in the
         * format @channelusername)
         */
        public int|string $chat_id,
        /** Unique identifier of the target user */
        public int $user_id,
    ) {
    }
}
