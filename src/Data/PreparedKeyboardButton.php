<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes a keyboard button to be used by a user of a Mini App.
 */
final class PreparedKeyboardButton extends Data implements TelegramBotData
{
    public function __construct(
        /** Unique identifier of the keyboard button */
        public string $id,
    ) {
    }
}
