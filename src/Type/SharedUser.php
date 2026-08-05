<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class SharedUser extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  int  Identifier of the shared user. This number may have more than 32 significant bits and
         * some programming languages may have difficulty/silent defects in interpreting it. But it has at most
         * 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these
         * identifiers. The bot may not have access to the user and could be unable to use this identifier,
         * unless the user is already known to the bot by some other means.
         */
        public int $user_id,
        /** @var  string|null  First name of the user, if the name was requested by the bot */
        public ?string $first_name,
        /** @var  string|null  Last name of the user, if the name was requested by the bot */
        public ?string $last_name,
        /** @var  string|null  Username of the user, if the username was requested by the bot */
        public ?string $username,
        /** @var  PhotoSize[]|null  Available sizes of the chat photo, if the photo was requested by the bot */
        public ?array $photo,
    ) {
    }
}
