<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * An expandable block for details disclosure, corresponding to the HTML tag <details>.
 */
final class InputRichBlockDetails extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "details" */
        public string $type,
        /** Always shown summary of the block */
        public RichText $summary,
        /**
         * Content of the block
         * @var array<InputRichBlock>
         */
        public array $blocks,
        /** Pass True if the content of the block is visible by default */
        public ?true $is_open,
    ) {
    }
}
