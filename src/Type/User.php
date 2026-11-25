<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may not be returned when irrelevant.
 */
class User extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int  Unique identifier for this user or bot. This number may have more than 32 significant
         * bits and some programming languages may have difficulty/silent defects in interpreting it. But it
         * has at most 52 significant bits, so a 64-bit integer or double-precision float type is safe for
         * storing this identifier.
         */
        public int $id,
        /** @var  bool  True, if this user is a bot */
        public bool $is_bot,
        /** @var  string  User's or bot's first name */
        public string $first_name,
        /** @var  string|null  User's or bot's last name */
        public ?string $last_name,
        /** @var  string|null  User's or bot's username */
        public ?string $username,
        /** @var  string|null  IETF language tag of the user's language */
        public ?string $language_code,
        /** @var  true|null  True, if this user is a Telegram Premium user */
        public ?true $is_premium,
        /** @var  true|null  True, if this user added the bot to the attachment menu */
        public ?true $added_to_attachment_menu,
    ) {
    }
}
