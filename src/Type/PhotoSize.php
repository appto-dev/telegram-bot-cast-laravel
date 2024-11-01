<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents one size of a photo or a <a href="#document">file</a> /
 * <a href="#sticker">sticker</a> thumbnail.
 *
 * @version Telegram Bot API 7.11
 */
final class PhotoSize extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Identifier for this file, which can be used to download or reuse the file
         * @var string
         */
        public string $file_id,
        /**
         * Unique identifier for this file, which is supposed to be the same over time and
         * for different bots. Can't be used to download or reuse the file.
         * @var string
         */
        public string $file_unique_id,
        /**
         * Photo width
         * @var int
         */
        public int $width,
        /**
         * Photo height
         * @var int
         */
        public int $height,
        /**
         * File size in bytes
         * @var int
         */
        public ?int $file_size,
    ) {
    }
}
