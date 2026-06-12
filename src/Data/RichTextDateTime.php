<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Formatted date and time.
 */
final class RichTextDateTime extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "date_time" */
        public string $type,
        /** The text */
        public RichText $text,
        /** The Unix time associated with the entity */
        public int $unix_time,
        /** The string that defines the formatting of the date and time. See date-time entity formatting for more details. */
        public string $date_time_format,
    ) {
    }
}
