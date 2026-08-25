<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * The following methods and objects allow your bot to handle and send rich messages.
 */
class RichTextButton extends Data implements TelegramType, RichText
{
    public function __construct(
        /** @var  string  Type of the rich text, always "button" */
        public string $type,
        /** @var  RichMessageButton  The button */
        public RichMessageButton $button,
    ) {
    }
}
