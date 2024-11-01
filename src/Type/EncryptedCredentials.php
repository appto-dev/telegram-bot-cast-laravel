<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Describes data required for decrypting and authenticating <a
 * href="#encryptedpassportelement">EncryptedPassportElement</a>. See the <a
 * href="/passport#receiving-information">Telegram Passport Documentation</a> for a
 * complete description of the data decryption and authentication processes.
 *
 * @version Telegram Bot API 7.11
 */
final class EncryptedCredentials extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Base64-encoded encrypted JSON-serialized data with unique user's payload, data
         * hashes and secrets required for EncryptedPassportElement decryption and
         * authentication
         * @var string
         */
        public string $data,
        /**
         * Base64-encoded data hash for data authentication
         * @var string
         */
        public string $hash,
        /**
         * Base64-encoded secret, encrypted with the bot's public RSA key, required for
         * data decryption
         * @var string
         */
        public string $secret,
    ) {
    }
}
