<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\RichTextCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichBlockTableCell extends Data implements TelegramType
{
    public function __construct(
        /** @var  RichText|null  Text in the cell. If omitted, then the cell is invisible. */
        #[WithCast(RichTextCast::class)]
        public ?RichText $text,
        /** @var  true|null  True, if the cell is a header cell */
        public ?true $is_header,
        /** @var  int|null  The number of columns the cell spans if it is bigger than 1 */
        public ?int $colspan,
        /** @var  int|null  The number of rows the cell spans if it is bigger than 1 */
        public ?int $rowspan,
        /**
         * @var  string  Horizontal cell content alignment. Currently, must be one of "left", "center", or
         * "right".
         */
        public string $align,
        /**
         * @var  string  Vertical cell content alignment. Currently, must be one of "top", "middle", or
         * "bottom".
         */
        public string $valign,
    ) {
    }
}
