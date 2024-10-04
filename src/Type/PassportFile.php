<?php
namespace ApptoTeam\TelegramBotCastLaravel\Type;

use ApptoTeam\TelegramBotCastLaravel\Interface\TypeInterface;
use Spatie\LaravelData\Dto;

/**
 * PassportFile
 *
 * This object represents a file uploaded to Telegram Passport. Currently all
 * Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class PassportFile extends Dto implements TypeInterface
{
    public function __construct(
        /**
         * Identifier for this file, which can be used to download or reuse the
         * file
         */
        public string $file_id,
        /**
         * Unique identifier for this file, which is supposed to be the same over
         * time and for different bots. Can't be used to download or reuse the
         * file.
         */
        public string $file_unique_id,
        /** File size in bytes */
        public int $file_size,
        /** Unix time when the file was uploaded */
        public int $file_date,
    ) {
    }
}