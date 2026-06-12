<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A mention by a username.
 */
final class RichTextMention extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "mention" */
        public string $type,
        /** The text */
        public RichText $text,
        /** The username */
        public string $username,
    ) {
    }
}
