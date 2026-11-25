<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may not be returned when irrelevant.
 */
class KeyboardButtonRequestManagedBot extends Data implements TelegramType
{
    public function __construct(
        /** @var  int  Signed 32-bit identifier of the request. Must be unique within the message. */
        public int $request_id,
        /** @var  string|null  Suggested name for the bot */
        public ?string $suggested_name,
        /**
         * @var  string|null  Suggested username for the bot. The username must end with "bot". If the user
         * creating the bot has a Telegram Premium subscription, then the username can also end with "agent",
         * "ai", "app", "game", or "gay"; in this case, the username will be assigned to the bot as a secondary
         * username, and a regular username ending with "bot" will be assigned to the bot automatically.
         */
        public ?string $suggested_username,
    ) {
    }
}
