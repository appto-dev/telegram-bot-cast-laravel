<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A text covered by a spoiler.
 */
final class RichTextSpoiler extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "spoiler" */
        public string $type,
        /** The text */
        public RichText $text,
    ) {
    }
}
