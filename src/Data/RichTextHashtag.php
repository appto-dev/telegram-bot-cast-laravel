<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A hashtag.
 */
final class RichTextHashtag extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "hashtag" */
        public string $type,
        /** The text */
        public RichText $text,
        /** The hashtag */
        public string $hashtag,
    ) {
    }
}
