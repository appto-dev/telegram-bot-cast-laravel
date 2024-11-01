<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents an issue with a document scan. The error is considered resolved when
 * the file with the document scan changes.
 *
 * @version Telegram Bot API 7.11
 */
final class PassportElementErrorFile extends Data implements TelegramTypeInterface
{
    public function __construct(
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
        /**
         * Error source, must be file
         * @var string
         */
        public string $source = 'file',
    ) {
    }
}
