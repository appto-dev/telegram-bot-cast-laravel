<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A text with a phone number.
 */
final class RichTextPhoneNumber extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "phone_number" */
        public string $type,
        /** The text */
        public RichText $text,
        /** The phone number */
        public string $phone_number,
    ) {
    }
}
