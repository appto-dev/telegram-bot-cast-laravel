<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A text with an email address.
 */
final class RichTextEmailAddress extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "email_address" */
        public string $type,
        /** The text */
        public RichText $text,
        /** The email address */
        public string $email_address,
    ) {
    }
}
