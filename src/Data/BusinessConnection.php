<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes the connection of the bot with a business account.
 */
final class BusinessConnection extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique identifier of the business connection */
        public string $id,
        /** Business account user that created the business connection */
        public User $user,
        /**
         * Identifier of a private chat with the user who created the business connection. This number may have more than
         * 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But
         * it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing
         * this identifier.
         */
        public int $user_chat_id,
        /** Date the connection was established in Unix time */
        public int $date,
        /** Rights of the business bot */
        public ?BusinessBotRights $rights,
        /** True, if the connection is active */
        public bool $is_enabled,
    ) {
    }
}
