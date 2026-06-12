<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichBlock;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A block with a mathematical expression in LaTeX format, corresponding to the custom HTML tag <tg-math-block>.
 */
final class RichBlockMathematicalExpression extends Data implements TelegramBotData, RichBlock
{
    public function __construct(
        /** Type of the block, always "mathematical_expression" */
        public string $type,
        /** The mathematical expression in LaTeX format */
        public string $expression,
    ) {
    }
}
