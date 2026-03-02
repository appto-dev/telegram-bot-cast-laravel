<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\PassportElementError;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents an issue with a document scan. The error is considered resolved when the file with the document
 * scan changes.
 */
final class PassportElementErrorFile extends Data implements TelegramBotData, PassportElementError
{
    public function __construct(
        /** Error source, must be file */
        public string $source,
        /**
         * The section of the user's Telegram Passport which has the issue, one of "utility_bill", "bank_statement",
         * "rental_agreement", "passport_registration", "temporary_registration"
         */
        public string $type,
        /** Base64-encoded file hash */
        public string $file_hash,
        /** Error message */
        public string $message,
    ) {
    }
}
