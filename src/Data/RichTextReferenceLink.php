<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A link to a reference.
 */
final class RichTextReferenceLink extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "reference_link" */
        public string $type,
        /** The link text */
        public RichText $text,
        /** The name of the reference */
        public string $reference_name,
    ) {
    }
}
