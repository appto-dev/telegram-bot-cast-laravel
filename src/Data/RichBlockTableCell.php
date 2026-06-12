<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Cell in a table.
 */
final class RichBlockTableCell extends Data implements TelegramBotData
{
    public function __construct(
        /** Text in the cell. If omitted, then the cell is invisible. */
        public ?RichText $text,
        /** True, if the cell is a header cell */
        public ?true $is_header,
        /** The number of columns the cell spans if it is bigger than 1 */
        public ?int $colspan,
        /** The number of rows the cell spans if it is bigger than 1 */
        public ?int $rowspan,
        /** Horizontal cell content alignment. Currently, must be one of "left", "center", or "right". */
        public string $align,
        /** Vertical cell content alignment. Currently, must be one of "top", "middle", or "bottom". */
        public string $valign,
    ) {
    }
}
