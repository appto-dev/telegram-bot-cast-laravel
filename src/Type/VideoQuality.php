<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a video file of a specific quality.
 */
final class VideoQuality extends Data implements TelegramTypeInterface
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
         * Video width
         * @var int
         */
        public int $width,
        /**
         * Video height
         * @var int
         */
        public int $height,
        /**
         * Codec that was used to encode the video, for example, "h264", "h265", or "av01"
         * @var string
         */
        public string $codec,
        /**
         * File size in bytes. It can be bigger than 2^31 and some programming languages
         * may have difficulty/silent defects in interpreting it. But it has at most 52
         * significant bits, so a signed 64-bit integer or double-precision float type are
         * safe for storing this value.
         * @var int
         */
        public ?int $file_size,
    ) {
    }
}
