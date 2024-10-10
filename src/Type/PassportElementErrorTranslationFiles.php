<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents an issue with the translated version of a document. The error is
 * considered resolved when a file with the document translation change.
 *
 * @version Telegram Bot API 7.10
 */
final class PassportElementErrorTranslationFiles extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of element of the user's Telegram Passport which has the issue, one of
         * "passport", "driver_license", "identity_card", "internal_passport",
         * "utility_bill", "bank_statement", "rental_agreement", "passport_registration",
         * "temporary_registration"
         * @var string
         */
        public string $type,
        /**
         * List of base64-encoded file hashes
         * @var string[]
         */
        public array $file_hashes,
        /**
         * Error message
         * @var string
         */
        public string $message,
        /**
         * Error source, must be translation_files
         * @var string
         */
        public string $source = 'translation_files',
    ) {
    }
}
