<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A text paragraph, corresponding to the HTML tag <p>.
 */
final class RichBlockParagraph extends Data implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "paragraph" */
        public string $type,
        /** Text of the block */
        public RichText $text,
    ) {
    }
}
