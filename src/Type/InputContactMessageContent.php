<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents the <a href="#inputmessagecontent">content</a> of a contact message
 * to be sent as the result of an inline query.
 *
 * @version Telegram Bot API 7.10
 */
final class InputContactMessageContent extends Data implements TelegramTypeContract
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
         * @var string
         */
        public ?string $last_name,
        /**
         * Additional data about the contact in the form of a vCard, 0-2048 bytes
         * @var string
         */
        public ?string $vcard,
    ) {
    }
}
