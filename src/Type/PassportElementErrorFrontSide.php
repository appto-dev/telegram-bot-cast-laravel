<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents an issue with the front side of a document. The error is considered
 * resolved when the file with the front side of the document changes.
 */
final class PassportElementErrorFrontSide extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * The section of the user's Telegram Passport which has the issue, one of
         * "passport", "driver_license", "identity_card", "internal_passport"
         * @var string
         */
        public string $type,
        /**
         * Base64-encoded hash of the file with the front side of the document
         * @var string
         */
        public string $file_hash,
        /**
         * Error message
         * @var string
         */
        public string $message,
        /**
         * Error source, must be front_side
         * @var string
         */
        public string $source = 'front_side',
    ) {
    }
}
