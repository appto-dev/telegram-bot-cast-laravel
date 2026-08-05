<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ResponseParameters extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int|null  The group has been migrated to a supergroup with the specified identifier. This
         * number may have more than 32 significant bits and some programming languages may have
         * difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed
         * 64-bit integer or double-precision float type are safe for storing this identifier.
         */
        public ?int $migrate_to_chat_id,
        /**
         * @var  int|null  In case of exceeding flood control, the number of seconds left to wait before the
         * request can be repeated
         */
        public ?int $retry_after,
    ) {
    }
}
