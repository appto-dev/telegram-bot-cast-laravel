<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A superscript text.
 */
final class RichTextSuperscript extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "superscript" */
        public string $type,
        /** The text */
        public RichText $text,
    ) {
    }
}
