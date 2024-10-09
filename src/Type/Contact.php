<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a phone contact.
 *
 * @version Telegram Bot API 7.10
 */
final class Contact extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Contact's phone number
         * @var string
         */
        public string $phone_number,
        /**
         * Contact's first name
         * @var string
         */
        public string $first_name,
        /**
         * Contact's last name
         * @var string|null
         */
        public ?string $last_name,
        /**
         * Contact's user identifier in Telegram. This number may have more than 32
         * significant bits and some programming languages may have difficulty/silent
         * defects in interpreting it. But it has at most 52 significant bits, so a 64-bit
         * integer or double-precision float type are safe for storing this identifier.
         * @var int|null
         */
        public ?int $user_id,
        /**
         * Additional data about the contact in the form of a vCard
         * @var string|null
         */
        public ?string $vcard,
    ) {
    }
}
