<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class Contact extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Contact's phone number */
        public string $phone_number,
        /** @var  string  Contact's first name */
        public string $first_name,
        /** @var  string|null  Contact's last name */
        public ?string $last_name,
        /**
         * @var  int|null  Contact's user identifier in Telegram. This number may have more than 32 significant
         * bits and some programming languages may have difficulty/silent defects in interpreting it. But it
         * has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for
         * storing this identifier.
         */
        public ?int $user_id,
        /** @var  string|null  Additional data about the contact in the form of a vCard */
        public ?string $vcard,
    ) {
    }
}
