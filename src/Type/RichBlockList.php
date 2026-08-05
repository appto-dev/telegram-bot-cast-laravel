<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichBlockList extends Data implements TelegramType, RichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "list" */
        public string $type,
        /** @var  RichBlockListItem[]  Items of the list */
        public array $items,
    ) {
    }
}
