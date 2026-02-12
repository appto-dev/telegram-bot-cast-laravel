<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Describes Telegram Passport data shared with the bot by the user.
 */
final class PassportData extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Array with information about documents and other Telegram Passport elements that
         * was shared with the bot
         */
        public EncryptedPassportElement $data,
        /** Encrypted credentials required to decrypt the data */
        public EncryptedCredentials $credentials,
    ) {
    }
}
