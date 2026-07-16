<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A divider, corresponding to the HTML tag <hr/>.
 */
final class InputRichBlockDivider extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "divider" */
        public string $type,
    ) {
    }
}
