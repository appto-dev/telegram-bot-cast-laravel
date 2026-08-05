<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class MessageOriginChat extends Data implements TelegramType, MessageOrigin
{
    public function __construct(
        /** @var  string  Type of the message origin, always "chat" */
        public string $type,
        /** @var  int  Date the message was sent originally in Unix time */
        public int $date,
        /** @var  Chat  Chat that sent the message originally */
        public Chat $sender_chat,
        /**
         * @var  string|null  For messages originally sent by an anonymous chat administrator, original message
         * author signature
         */
        public ?string $author_signature,
    ) {
    }
}
