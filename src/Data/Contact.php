<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a phone contact.
 */
final class Contact extends Data implements TelegramBotData
{
    public function __construct(
        /** Contact's phone number */
        public string $phone_number,
        /** Contact's first name */
        public string $first_name,
        /** Contact's last name */
        public ?string $last_name,
        /**
         * Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages
         * may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or
         * double-precision float type are safe for storing this identifier.
         */
        public ?int $user_id,
        /** Additional data about the contact in the form of a vCard */
        public ?string $vcard,
    ) {
    }
}
