<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A footer, corresponding to the HTML tag <footer>.
 */
final class InputRichBlockFooter extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "footer" */
        public string $type,
        /** Text of the block */
        public RichText $text,
    ) {
    }
}
