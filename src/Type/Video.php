<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents a video file.
 *
 * @version Telegram Bot API 7.10
 */
final class Video extends Data implements TelegramTypeContract
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
         * Video width as defined by the sender
         * @var int
         */
        public int $width,
        /**
         * Video height as defined by the sender
         * @var int
         */
        public int $height,
        /**
         * Duration of the video in seconds as defined by the sender
         * @var int
         */
        public int $duration,
        /**
         * Video thumbnail
         * @var PhotoSize|null
         */
        public ?PhotoSize $thumbnail,
        /**
         * Original filename as defined by the sender
         * @var string|null
         */
        public ?string $file_name,
        /**
         * MIME type of the file as defined by the sender
         * @var string|null
         */
        public ?string $mime_type,
        /**
         * File size in bytes. It can be bigger than 2^31 and some programming languages
         * may have difficulty/silent defects in interpreting it. But it has at most 52
         * significant bits, so a signed 64-bit integer or double-precision float type are
         * safe for storing this value.
         * @var int|null
         */
        public ?int $file_size,
    ) {
    }
}
