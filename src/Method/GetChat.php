<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\Chat;
use Spatie\LaravelData\Data;

/**
 * GetChat
 *
 * Use this method to get up to date information about the chat. Returns a Chat
 * object on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class GetChat extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = Chat::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target
         * supergroup or channel (in the format @channelusername)
         */
        public int|string $chat_id,
    ) {
    }
}
