<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents an issue with one of the files that constitute the translation of a
 * document. The error is considered resolved when the file changes.
 */
final class PassportElementErrorTranslationFile extends Data implements TelegramTypeInterface
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
         * Base64-encoded file hash
         * @var string
         */
        public string $file_hash,
        /**
         * Error message
         * @var string
         */
        public string $message,
        /**
         * Error source, must be translation_file
         * @var string
         */
        public string $source = 'translation_file',
    ) {
    }
}
