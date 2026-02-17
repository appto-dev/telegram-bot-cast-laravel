<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Marks incoming message as read on behalf of a business account. Requires the <em>can_read_messages</em>
 * business bot right. Returns <em>True</em> on success.
 */
final class ReadBusinessMessage extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the business connection on behalf of which to read the message */
        public string $business_connection_id,
        /**
         * Unique identifier of the chat in which the message was received. The chat must have been active in the last 24
         * hours.
         */
        public int $chat_id,
        /** Unique identifier of the message to mark as read */
        public int $message_id,
    ) {
    }
}
