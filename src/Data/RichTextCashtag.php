<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A cashtag.
 */
final class RichTextCashtag extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "cashtag" */
        public string $type,
        /** The text */
        public RichText $text,
        /** The cashtag */
        public string $cashtag,
    ) {
    }
}
