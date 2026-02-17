<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents an inline keyboard button that copies specified text to the clipboard.
 */
final class CopyTextButton extends Data implements TelegramBotData
{
    public function __construct(
        /** The text to be copied to the clipboard; 1-256 characters */
        public string $text,
    ) {
    }
}
