<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ManagedBotUpdated extends Data implements TelegramType
{
    public function __construct(
        /** @var  User  User that created the bot */
        public User $user,
        /**
         * @var  User  Information about the bot. Token of the bot can be fetched using the method
         * getManagedBotToken.
         */
        public User $bot,
    ) {
    }
}
