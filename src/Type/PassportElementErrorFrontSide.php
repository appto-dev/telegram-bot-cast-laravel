<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents an issue with the front side of a document. The error is considered
 * resolved when the file with the front side of the document changes.
 *
 * @version Telegram Bot API 7.10
 */
final class PassportElementErrorFrontSide extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Error source, must be front_side
         * @var string
         */
        public string $source,
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
    ) {
    }
}
