<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A subscript text.
 */
final class RichTextSubscript extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "subscript" */
        public string $type,
        /** The text */
        public RichText $text,
    ) {
    }
}
