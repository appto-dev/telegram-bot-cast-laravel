<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A bold text.
 */
final class RichTextBold extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "bold" */
        public string $type,
        /** The text */
        public RichText $text,
    ) {
    }
}
