<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class InaccessibleMessage extends Data implements TelegramType, MaybeInaccessibleMessage
{
    public function __construct(
        /** @var  Chat  Chat the message belonged to */
        public Chat $chat,
        /** @var  int  Unique message identifier inside the chat */
        public int $message_id,
        /** @var  int  Always 0. The field can be used to differentiate regular and inaccessible messages. */
        public int $date,
    ) {
    }
}
