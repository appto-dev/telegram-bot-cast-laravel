<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block quotation, corresponding to the HTML tag <blockquote>.
 */
final class RichBlockBlockQuotation extends Data implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "blockquote" */
        public string $type,
        /**
         * Content of the block
         * @var array<RichBlock>
         */
        public array $blocks,
        /** Credit of the block */
        public ?RichText $credit,
    ) {
    }
}
