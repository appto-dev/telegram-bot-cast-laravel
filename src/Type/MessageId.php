<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class MessageId extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int  Unique message identifier. In specific instances (e.g., message containing a video sent
         * to a big chat), the server might automatically schedule a message instead of sending it immediately.
         * In such cases, this field will be 0 and the relevant message will be unusable until it is actually
         * sent.
         */
        public int $message_id,
    ) {
    }
}
