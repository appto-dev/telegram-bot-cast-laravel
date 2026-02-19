<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\PassportElementError;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents an issue with one of the files that constitute the translation of a document. The error is considered
 * resolved when the file changes.
 */
final class PassportElementErrorTranslationFile extends Data implements TelegramBotData, PassportElementError
{
    public function __construct(
        /** Error source, must be translation_file */
        public string $source,
        /**
         * Type of element of the user's Telegram Passport which has the issue, one of "passport", "driver_license",
         * "identity_card", "internal_passport", "utility_bill", "bank_statement", "rental_agreement", "passport_registration",
         * "temporary_registration"
         */
        public string $type,
        /** Base64-encoded file hash */
        public string $file_hash,
        /** Error message */
        public string $message,
    ) {
    }
}
