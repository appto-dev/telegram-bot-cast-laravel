<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A list of blocks, corresponding to the HTML tag <ul> or <ol> with multiple nested tags <li>.
 */
final class InputRichBlockList extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "list" */
        public string $type,
        /**
         * Items of the list
         * @var array<InputRichBlockListItem>
         */
        public array $items,
    ) {
    }
}
