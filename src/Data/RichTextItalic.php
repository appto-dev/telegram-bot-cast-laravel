<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * An italicized text.
 */
final class RichTextItalic extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "italic" */
        public string $type,
        /** The text */
        public RichText $text,
    ) {
    }
}
