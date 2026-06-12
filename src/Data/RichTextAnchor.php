<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * An anchor.
 */
final class RichTextAnchor extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "anchor" */
        public string $type,
        /** The name of the anchor */
        public string $name,
    ) {
    }
}
