<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a <a
 * href="https://telegram.org/blog/video-messages-and-telescope">video message</a>
 * (available in Telegram apps as of <a
 * href="https://telegram.org/blog/video-messages-and-telescope">v.4.0</a>).
 */
final class VideoNote extends Data implements TelegramTypeInterface
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
         * Video width and height (diameter of the video message) as defined by the sender
         * @var int
         */
        public int $length,
        /**
         * Duration of the video in seconds as defined by the sender
         * @var int
         */
        public int $duration,
        /**
         * Video thumbnail
         * @var PhotoSize
         */
        public ?PhotoSize $thumbnail,
        /**
         * File size in bytes
         * @var int
         */
        public ?int $file_size,
    ) {
    }
}
