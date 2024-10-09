<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents an issue with the reverse side of a document. The error is considered
 * resolved when the file with reverse side of the document changes.
 *
 * @version Telegram Bot API 7.10
 */
final class PassportElementErrorReverseSide extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Error source, must be reverse_side
         * @var string
         */
        public string $source,
        /**
         * The section of the user's Telegram Passport which has the issue, one of
         * "driver_license", "identity_card"
         * @var string
         */
        public string $type,
        /**
         * Base64-encoded hash of the file with the reverse side of the document
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
