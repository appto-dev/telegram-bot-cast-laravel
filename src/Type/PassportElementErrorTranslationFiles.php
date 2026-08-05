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
class PassportElementErrorTranslationFiles extends Data implements TelegramType, PassportElementError
{
    public function __construct(
        /** @var  string  Error source, must be translation_files */
        public string $source,
        /**
         * @var  string  Type of element of the user's Telegram Passport which has the issue, one of
         * "passport", "driver_license", "identity_card", "internal_passport", "utility_bill",
         * "bank_statement", "rental_agreement", "passport_registration", "temporary_registration"
         */
        public string $type,
        /** @var  string[]  List of base64-encoded file hashes */
        public array $file_hashes,
        /** @var  string  Error message */
        public string $message,
    ) {
    }
}
