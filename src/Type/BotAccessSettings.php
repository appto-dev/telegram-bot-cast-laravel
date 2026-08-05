<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class BotAccessSettings extends Data implements TelegramType
{
    public function __construct(
        /** @var  bool  True, if only selected users can access the bot. The bot's owner can always access it. */
        public bool $is_access_restricted,
        /** @var  User[]|null  The list of other users who have access to the bot if the access is restricted */
        public ?array $added_users,
    ) {
    }
}
