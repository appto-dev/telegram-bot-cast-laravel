<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputRichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block with a mathematical expression in LaTeX format, corresponding to the custom HTML tag <tg-math-block>.
 */
final class InputRichBlockMathematicalExpression extends Data implements TelegramBotData, InputRichBlock
{
    public function __construct(
        /** Type of the block, always "mathematical_expression" */
        public string $type,
        /** The mathematical expression in LaTeX format */
        public string $expression,
    ) {
    }
}
