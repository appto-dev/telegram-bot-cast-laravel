<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A section heading, corresponding to the HTML tags <h1>, <h2>, <h3>, <h4>, <h5>, or <h6>.
 */
final class InputRichBlockSectionHeading extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "heading" */
        public string $type,
        /** Text of the block */
        public RichText $text,
        /** Relative size of the text font; 1-6, 1 is the largest, 6 is the smallest */
        public int $size,
    ) {
    }
}
