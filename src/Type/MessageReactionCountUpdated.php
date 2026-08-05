<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class MessageReactionCountUpdated extends Data implements TelegramType
{
    public function __construct(
        /** @var  Chat  The chat containing the message */
        public Chat $chat,
        /** @var  int  Unique message identifier inside the chat */
        public int $message_id,
        /** @var  int  Date of the change in Unix time */
        public int $date,
        /** @var  ReactionCount[]  List of reactions that are present on the message */
        public array $reactions,
    ) {
    }
}
