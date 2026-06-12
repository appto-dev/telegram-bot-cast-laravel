<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A preformatted text block, corresponding to the nested HTML tags <pre> and <code>.
 */
final class RichBlockPreformatted extends Data implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "pre" */
        public string $type,
        /** Text of the block */
        public RichText $text,
        /** The programming language of the text */
        public ?string $language,
    ) {
    }
}
