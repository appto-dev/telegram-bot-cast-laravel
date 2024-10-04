<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * PassportElementErrorFiles
 *
 * Represents an issue with a list of scans. The error is considered resolved when
 * the list of files containing the scans changes.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class PassportElementErrorFiles extends Dto implements TypeInterface
{
    public function __construct(
        /** Error source, must be files */
        public string $source,
        /**
         * The section of the user's Telegram Passport which has the issue, one
         * of "utility_bill", "bank_statement", "rental_agreement",
         * "passport_registration", "temporary_registration"
         */
        public string $type,
        /**
         * List of base64-encoded file hashes
         * @var array<string>
         */
        public array $file_hashes,
        /** Error message */
        public string $message,
    ) {
    }
}
