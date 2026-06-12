<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A text with a link.
 */
final class RichTextUrl extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "url" */
        public string $type,
        /** The text */
        public RichText $text,
        /** URL of the link */
        public string $url,
    ) {
    }
}
