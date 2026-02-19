<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\PassportElementError;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing
 * the scans changes.
 */
final class PassportElementErrorFiles extends Data implements TelegramBotData, PassportElementError
{
    public function __construct(
        /** Error source, must be files */
        public string $source,
        /**
         * The section of the user's Telegram Passport which has the issue, one of "utility_bill", "bank_statement",
         * "rental_agreement", "passport_registration", "temporary_registration"
         */
        public string $type,
        /**
         * List of base64-encoded file hashes
         * @var array<string>
         */
        public array $file_hashes,
        /** Error message */
        public string $message,
    ) {
    }
}
