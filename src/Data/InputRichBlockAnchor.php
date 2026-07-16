<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block with an anchor, corresponding to the HTML tag <a> with the attribute name.
 */
final class InputRichBlockAnchor extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "anchor" */
        public string $type,
        /** The name of the anchor */
        public string $name,
    ) {
    }
}
