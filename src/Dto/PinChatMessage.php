<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to add a message to the list of pinned messages in a chat. In
 * private chats and channel direct messages chats, all non-service messages can be
 * pinned. Conversely, the bot must be an administrator with the 'can_pin_messages'
 * right or the 'can_edit_messages' right to pin messages in groups and channels
 * respectively. Returns <em>True</em> on success.
 */
final class PinChatMessage extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be pinned
         */
        public ?string $business_connection_id,
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         */
        public int|string $chat_id,
        /** Identifier of a message to pin */
        public int $message_id,
        /**
         * Pass <em>True</em> if it is not necessary to send a notification to all chat
         * members about the new pinned message. Notifications are always disabled in
         * channels and private chats.
         */
        public ?bool $disable_notification,
    ) {
    }
}
