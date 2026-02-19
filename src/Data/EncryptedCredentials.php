<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes data required for decrypting and authenticating <a
 * href="https://core.telegram.org/bots/api#encryptedpassportelement">EncryptedPassportElement</a>. See the <a
 * href="https://core.telegram.org/passport#receiving-information">Telegram Passport Documentation</a> for a complete
 * description of the data decryption and authentication processes.
 */
final class EncryptedCredentials extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for
         * EncryptedPassportElement decryption and authentication
         */
        public string $data,
        /** Base64-encoded data hash for data authentication */
        public string $hash,
        /** Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption */
        public string $secret,
    ) {
    }
}
