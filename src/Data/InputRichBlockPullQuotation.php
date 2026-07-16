<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A quotation with centered text, loosely corresponding to the HTML tag <aside>.
 */
final class InputRichBlockPullQuotation extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "pullquote" */
        public string $type,
        /** Text of the block */
        public RichText $text,
        /** Credit of the block */
        public ?RichText $credit,
    ) {
    }
}
