<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichBlockListItem extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Label of the item */
        public string $label,
        /** @var  RichBlock[]  The content of the item */
        public array $blocks,
        /** @var  true|null  True, if the item has a checkbox */
        public ?true $has_checkbox,
        /** @var  true|null  True, if the item has a checked checkbox */
        public ?true $is_checked,
        /** @var  int|null  For ordered lists, the numeric value of the item label */
        public ?int $value,
        /**
         * @var  string|null  For ordered lists, the type of the item label; must be one of "a" for lowercase
         * letters, "A" for uppercase letters, "i" for lowercase Roman numerals, "I" for uppercase Roman
         * numerals, or "1" for decimal numbers
         */
        public ?string $type,
    ) {
    }
}
