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
class EncryptedCredentials extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string  Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes
         * and secrets required for EncryptedPassportElement decryption and authentication
         */
        public string $data,
        /** @var  string  Base64-encoded data hash for data authentication */
        public string $hash,
        /**
         * @var  string  Base64-encoded secret, encrypted with the bot's public RSA key, required for data
         * decryption
         */
        public string $secret,
    ) {
    }
}
