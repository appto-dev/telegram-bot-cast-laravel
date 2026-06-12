<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A strikethrough text.
 */
final class RichTextStrikethrough extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "strikethrough" */
        public string $type,
        /** The text */
        public RichText $text,
    ) {
    }
}
