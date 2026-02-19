<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\PassportElementError;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents an issue with the selfie with a document. The error is considered resolved when the file with the selfie
 * changes.
 */
final class PassportElementErrorSelfie extends Data implements TelegramBotData, PassportElementError
{
    public function __construct(
        /** Error source, must be selfie */
        public string $source,
        /**
         * The section of the user's Telegram Passport which has the issue, one of "passport", "driver_license", "identity_card",
         * "internal_passport"
         */
        public string $type,
        /** Base64-encoded hash of the file with the selfie */
        public string $file_hash,
        /** Error message */
        public string $message,
    ) {
    }
}
