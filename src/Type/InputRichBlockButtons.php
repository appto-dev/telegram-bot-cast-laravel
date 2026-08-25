<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class InputRichBlockButtons extends Data implements TelegramType, InputRichBlock
{
    public function __construct(
        /** @var  string  Type of the block, always "buttons" */
        public string $type,
        /** @var  RichMessageButton[]  List of 1-8 buttons to send */
        public array $buttons,
        /**
         * @var  string|null  Horizontal alignment of the buttons. Currently, must be one of "left", "center",
         * or "right".
         */
        public ?string $align,
    ) {
    }
}
