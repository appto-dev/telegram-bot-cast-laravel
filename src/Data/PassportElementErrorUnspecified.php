<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\PassportElementError;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents an issue in an unspecified place. The error is considered resolved
 * when new data is added.
 */
final class PassportElementErrorUnspecified extends Data implements TelegramBotData, PassportElementError
{
    public function __construct(
        /** Error source, must be unspecified */
        public string $source,
        /** Type of element of the user's Telegram Passport which has the issue */
        public string $type,
        /** Base64-encoded element hash */
        public string $element_hash,
        /** Error message */
        public string $message,
    ) {
    }
}
