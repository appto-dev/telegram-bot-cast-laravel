<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class MessageOriginChannel extends Data implements TelegramType, MessageOrigin
{
    public function __construct(
        /** @var  string  Type of the message origin, always "channel" */
        public string $type,
        /** @var  int  Date the message was sent originally in Unix time */
        public int $date,
        /** @var  Chat  Channel chat to which the message was originally sent */
        public Chat $chat,
        /** @var  int  Unique message identifier inside the chat */
        public int $message_id,
        /** @var  string|null  Signature of the original post author */
        public ?string $author_signature,
    ) {
    }
}
