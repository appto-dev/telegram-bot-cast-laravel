<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * SetChatDescription
 *
 * Use this method to change the description of a group, a supergroup or a channel.
 * The bot must be an administrator in the chat for this to work and must have the
 * appropriate administrator rights. Returns True on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class SetChatDescription extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target
         * channel (in the format @channelusername)
         */
        public int|string $chat_id,
        /** New chat description, 0-255 characters */
        public ?string $description,
    ) {
    }
}
