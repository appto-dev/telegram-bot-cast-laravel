<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents an issue with the reverse side of a document. The error is considered
 * resolved when the file with reverse side of the document changes.
 */
final class PassportElementErrorReverseSide extends Data implements TelegramTypeInterface
{
    public function __construct(
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
        /**
         * Error source, must be reverse_side
         * @var string
         */
        public string $source = 'reverse_side',
    ) {
    }
}
