<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents an issue with a document scan. The error is considered resolved when
 * the file with the document scan changes.
 *
 * @version Telegram Bot API 7.10
 */
final class PassportElementErrorFile extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Error source, must be file
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
         * Base64-encoded file hash
         * @var string
         */
        public string $file_hash,
        /**
         * Error message
         * @var string
         */
        public string $message,
    ) {
    }
}
