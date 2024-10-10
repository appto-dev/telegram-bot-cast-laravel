<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents an issue with a list of scans. The error is considered resolved when
 * the list of files containing the scans changes.
 *
 * @version Telegram Bot API 7.10
 */
final class PassportElementErrorFiles extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Error source, must be files
         * @var string
         */
        public string $source,
        /**
         * The section of the user's Telegram Passport which has the issue, one of
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
    ) {
    }
}
