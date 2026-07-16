<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * An item of a list to be sent.
 */
final class InputRichBlockListItem extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * The content of the item
         * @var array<InputRichBlock>
         */
        public array $blocks,
        /** Pass True if the item has a checkbox */
        public ?true $has_checkbox,
        /** Pass True if the item has a checked checkbox */
        public ?true $is_checked,
        /** For ordered lists, the numeric value of the item label */
        public ?int $value,
        /**
         * For ordered lists, the type of the item label; must be one of "a" for lowercase letters, "A" for uppercase
         * letters, "i" for lowercase Roman numerals, "I" for uppercase Roman numerals, or "1" for decimal numbers
         */
        public ?string $type,
    ) {
    }
}
