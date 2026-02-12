<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\PassportElementError;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents an issue with the reverse side of a document. The error is considered
 * resolved when the file with reverse side of the document changes.
 */
final class PassportElementErrorReverseSide extends Data implements TelegramBotData, PassportElementError
{
    public function __construct(
        /** Error source, must be reverse_side */
        public string $source,
        /**
         * The section of the user's Telegram Passport which has the issue, one of
         * "driver_license", "identity_card"
         */
        public string $type,
        /** Base64-encoded hash of the file with the reverse side of the document */
        public string $file_hash,
        /** Error message */
        public string $message,
    ) {
    }
}
