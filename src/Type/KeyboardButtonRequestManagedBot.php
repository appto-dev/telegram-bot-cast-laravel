<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class KeyboardButtonRequestManagedBot extends Data implements TelegramType
{
    public function __construct(
        /** @var  int  Signed 32-bit identifier of the request. Must be unique within the message. */
        public int $request_id,
        /** @var  string|null  Suggested name for the bot */
        public ?string $suggested_name,
        /** @var  string|null  Suggested username for the bot */
        public ?string $suggested_username,
    ) {
    }
}
