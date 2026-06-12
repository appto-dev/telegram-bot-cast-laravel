<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A table, corresponding to the HTML tag <table>.
 */
final class RichBlockTable extends Data implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "table" */
        public string $type,
        /**
         * Cells of the table
         * @var array<array<RichBlockTableCell>>
         */
        public array $cells,
        /** True, if the table has borders */
        public ?true $is_bordered,
        /** True, if the table is striped */
        public ?true $is_striped,
        /** Caption of the table */
        public ?RichText $caption,
    ) {
    }
}
