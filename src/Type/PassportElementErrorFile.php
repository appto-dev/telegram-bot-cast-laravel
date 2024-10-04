<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * PassportElementErrorFile
 *
 * Represents an issue with a document scan. The error is considered resolved when
 * the file with the document scan changes.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class PassportElementErrorFile extends Dto implements TypeInterface
{
    public function __construct(
        /** Error source, must be file */
        public string $source,
        /**
         * The section of the user's Telegram Passport which has the issue, one
         * of "utility_bill", "bank_statement", "rental_agreement",
         * "passport_registration", "temporary_registration"
         */
        public string $type,
        /** Base64-encoded file hash */
        public string $file_hash,
        /** Error message */
        public string $message,
    ) {
    }
}