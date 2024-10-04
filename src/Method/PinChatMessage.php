<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\ResponseObject;
use Spatie\LaravelData\Data;

/**
 * PinChatMessage
 *
 * Use this method to add a message to the list of pinned messages in a chat. If
 * the chat is not a private chat, the bot must be an administrator in the chat for
 * this to work and must have the 'can_pin_messages' administrator right in a
 * supergroup or 'can_edit_messages' administrator right in a channel. Returns True
 * on success.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class PinChatMessage extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = ResponseObject::class;

    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target
         * channel (in the format @channelusername)
         */
        public int|string $chat_id,
        /** Identifier of a message to pin */
        public int $message_id,
        /**
         * Pass True if it is not necessary to send a notification to all chat
         * members about the new pinned message. Notifications are always
         * disabled in channels and private chats.
         */
        public ?bool $disable_notification,
    ) {
    }
}