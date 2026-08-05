<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class BusinessConnection extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Unique identifier of the business connection */
        public string $id,
        /** @var  User  Business account user that created the business connection */
        public User $user,
        /**
         * @var  int  Identifier of a private chat with the user who created the business connection. This
         * number may have more than 32 significant bits and some programming languages may have
         * difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit
         * integer or double-precision float type are safe for storing this identifier.
         */
        public int $user_chat_id,
        /** @var  int  Date the connection was established in Unix time */
        public int $date,
        /** @var  BusinessBotRights|null  Rights of the business bot */
        public ?BusinessBotRights $rights,
        /** @var  bool  True, if the connection is active */
        public bool $is_enabled,
    ) {
    }
}
