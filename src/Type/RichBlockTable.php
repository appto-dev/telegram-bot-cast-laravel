<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Support\Casts\RichTextCast;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichBlockTable extends Data implements TelegramType, RichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "table" */
        public string $type,
        /** @var  array<RichBlockTableCell[]>  Cells of the table */
        public array $cells,
        /** @var  true|null  True, if the table has borders */
        public ?true $is_bordered,
        /** @var  true|null  True, if the table is striped */
        public ?true $is_striped,
        /** @var  true|null  True, if table cells have smaller indents */
        public ?true $is_compact,
        /** @var  RichText|null  Caption of the table */
        #[WithCast(RichTextCast::class)]
        public ?RichText $caption,
    ) {
    }
}
