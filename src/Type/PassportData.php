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
class PassportData extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  EncryptedPassportElement[]  Array with information about documents and other Telegram Passport
         * elements that was shared with the bot
         */
        public array $data,
        /** @var  EncryptedCredentials  Encrypted credentials required to decrypt the data */
        public EncryptedCredentials $credentials,
    ) {
    }
}
