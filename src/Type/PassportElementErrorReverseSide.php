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
class PassportElementErrorReverseSide extends Data implements TelegramType, PassportElementError
{
    public function __construct(
        /** @var  string  Error source, must be reverse_side */
        public string $source,
        /**
         * @var  string  The section of the user's Telegram Passport which has the issue, one of
         * "driver_license", "identity_card"
         */
        public string $type,
        /** @var  string  Base64-encoded hash of the file with the reverse side of the document */
        public string $file_hash,
        /** @var  string  Error message */
        public string $message,
    ) {
    }
}
