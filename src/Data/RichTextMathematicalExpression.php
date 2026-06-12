<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\RichText;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * A mathematical expression.
 */
final class RichTextMathematicalExpression extends Data implements TelegramBotData, RichText
{
    public function __construct(
        /** Type of the rich text, always "mathematical_expression" */
        public string $type,
        /** The expression in LaTeX format */
        public string $expression,
    ) {
    }
}
