<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object is received when messages are deleted from a connected business account.
 */
final class BusinessMessagesDeleted extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $business_connection_id,
        /** Information about a chat in the business account. The bot may not have access to the chat or the corresponding user. */
        public Chat $chat,
        /**
         * The list of identifiers of deleted messages in the chat of the business account
         * @var array<int>
         */
        public array $message_ids,
    ) {
    }
}
