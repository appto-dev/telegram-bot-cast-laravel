<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichBlockMathematicalExpression extends Data implements TelegramType, RichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "mathematical_expression" */
        public string $type,
        /** @var  string  The mathematical expression in LaTeX format */
        public string $expression,
    ) {
    }
}
