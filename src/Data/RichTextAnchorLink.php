<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A link to an anchor.
 */
final class RichTextAnchorLink extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "anchor_link" */
        public string $type,
        /** The link text */
        public RichText $text,
        /** The name of the anchor. If the name is empty, then the link brings back to the top of the message. */
        public string $anchor_name,
    ) {
    }
}
