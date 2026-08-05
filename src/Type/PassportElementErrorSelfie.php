<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * Telegram Passport is a unified authorization method for services that require personal
 * identification. Users can upload their documents once, then instantly share their data with services
 * that require real-world ID (finance, ICOs, etc.). Please see the <a href="/passport">manual</a> for
 * details.
 */
class PassportElementErrorSelfie extends Data implements TelegramType, PassportElementError
{
    public function __construct(
        /** @var  string  Error source, must be selfie */
        public string $source,
        /**
         * @var  string  The section of the user's Telegram Passport which has the issue, one of "passport",
         * "driver_license", "identity_card", "internal_passport"
         */
        public string $type,
        /** @var  string  Base64-encoded hash of the file with the selfie */
        public string $file_hash,
        /** @var  string  Error message */
        public string $message,
    ) {
    }
}
