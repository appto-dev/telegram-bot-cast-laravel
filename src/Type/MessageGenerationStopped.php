<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class MessageGenerationStopped extends Data implements TelegramType
{
    public function __construct(
        /** @var  Chat  Chat in which the message is generated */
        public Chat $chat,
        /** @var  int|null  Unique identifier of the message thread in which the message is generated */
        public ?int $message_thread_id,
        /** @var  int  Unique identifier of the message draft which was stopped */
        public int $draft_id,
    ) {
    }
}
