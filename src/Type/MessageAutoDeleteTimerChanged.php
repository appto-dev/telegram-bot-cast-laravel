<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class MessageAutoDeleteTimerChanged extends Data implements TelegramType
{
    public function __construct(
        /** @var  int  New auto-delete time for messages in the chat; in seconds */
        public int $message_auto_delete_time,
    ) {
    }
}
