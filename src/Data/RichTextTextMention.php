<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A mention of a Telegram user by their identifier.
 */
final class RichTextTextMention extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "text_mention" */
        public string $type,
        /** The text */
        public RichText $text,
        /** The mentioned user */
        public User $user,
    ) {
    }
}
