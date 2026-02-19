<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputMessageContent;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents the <a href="https://core.telegram.org/bots/api#inputmessagecontent">content</a> of a contact message to be
 * sent as the result of an inline query.
 */
final class InputContactMessageContent extends Data implements TelegramBotData, InputMessageContent
{
    public function __construct(
        /** Contact's phone number */
        public string $phone_number,
        /** Contact's first name */
        public string $first_name,
        /** Contact's last name */
        public ?string $last_name,
        /** Additional data about the contact in the form of a vCard, 0-2048 bytes */
        public ?string $vcard,
    ) {
    }
}
