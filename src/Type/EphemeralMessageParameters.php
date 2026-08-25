<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class EphemeralMessageParameters extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int  Identifier of the user who will receive the message. It is not guaranteed that the user
         * will receive the message, especially if they are offline. See here for more details.
         */
        public int $receiver_user_id,
        /** @var  string|null  Identifier of the callback query which triggered the message, if any */
        public ?string $callback_query_id,
        /**
         * @var  bool|null  Pass True if the ephemeral message must be shown in place of the original message.
         * Must be False for callback queries from ephemeral messages, which must be edited using regular
         * editEphemeralMessage… methods.
         */
        public ?bool $replace_callback_query_message,
    ) {
    }
}
