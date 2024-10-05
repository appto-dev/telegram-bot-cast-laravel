<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Data;

/**
 * PassportData
 *
 * Describes Telegram Passport data shared with the bot by the user.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class PassportData extends Data implements TypeInterface
{
    public function __construct(
        /**
         * Array with information about documents and other Telegram Passport
         * elements that was shared with the bot
         * @var array<EncryptedPassportElement>
         */
        public array $data,
        /** Encrypted credentials required to decrypt the data */
        public EncryptedCredentials $credentials,
    ) {
    }
}
