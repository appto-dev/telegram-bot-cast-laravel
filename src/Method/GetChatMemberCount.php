<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use Spatie\LaravelData\Data;

/**
 * GetChatMemberCount
 *
 * Use this method to get the number of members in a chat. Returns Int on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class GetChatMemberCount extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = 'int';

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target
         * supergroup or channel (in the format @channelusername)
         */
        public int|string $chat_id,
    ) {
    }
}