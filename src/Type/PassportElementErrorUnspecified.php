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
class PassportElementErrorUnspecified extends Data implements TelegramType, PassportElementError
{
    public function __construct(
        /** @var  string  Error source, must be unspecified */
        public string $source,
        /** @var  string  Type of element of the user's Telegram Passport which has the issue */
        public string $type,
        /** @var  string  Base64-encoded element hash */
        public string $element_hash,
        /** @var  string  Error message */
        public string $message,
    ) {
    }
}
