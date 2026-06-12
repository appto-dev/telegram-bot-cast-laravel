<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A reference.
 */
final class RichTextReference extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "reference" */
        public string $type,
        /** Text of the reference */
        public RichText $text,
        /** The name of the reference */
        public string $name,
    ) {
    }
}
