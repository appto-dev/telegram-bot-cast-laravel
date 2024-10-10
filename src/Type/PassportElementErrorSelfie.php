<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents an issue with the selfie with a document. The error is considered
 * resolved when the file with the selfie changes.
 *
 * @version Telegram Bot API 7.10
 */
final class PassportElementErrorSelfie extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * The section of the user's Telegram Passport which has the issue, one of
         * "passport", "driver_license", "identity_card", "internal_passport"
         * @var string
         */
        public string $type,
        /**
         * Base64-encoded hash of the file with the selfie
         * @var string
         */
        public string $file_hash,
        /**
         * Error message
         * @var string
         */
        public string $message,
        /**
         * Error source, must be selfie
         * @var string
         */
        public string $source = 'selfie',
    ) {
    }
}
