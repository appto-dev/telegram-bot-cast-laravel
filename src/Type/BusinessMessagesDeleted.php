<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class BusinessMessagesDeleted extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Unique identifier of the business connection */
        public string $business_connection_id,
        /**
         * @var  Chat  Information about a chat in the business account. The bot may not have access to the
         * chat or the corresponding user.
         */
        public Chat $chat,
        /** @var  int[]  The list of identifiers of deleted messages in the chat of the business account */
        public array $message_ids,
    ) {
    }
}
