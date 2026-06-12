<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A divider, corresponding to the HTML tag <hr/>.
 */
final class RichBlockDivider extends Data implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "divider" */
        public string $type,
    ) {
    }
}
