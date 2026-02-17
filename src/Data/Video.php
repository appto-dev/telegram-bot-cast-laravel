<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a video file.
 */
final class Video extends Data implements TelegramBotData
{
    public function __construct(
        /** Identifier for this file, which can be used to download or reuse the file */
        public string $file_id,
        /**
         * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be
         * used to download or reuse the file.
         */
        public string $file_unique_id,
        /** Video width as defined by the sender */
        public int $width,
        /** Video height as defined by the sender */
        public int $height,
        /** Duration of the video in seconds as defined by the sender */
        public int $duration,
        /** Video thumbnail */
        public ?PhotoSize $thumbnail,
        /** Available sizes of the cover of the video in the message */
        public ?PhotoSize $cover,
        /** Timestamp in seconds from which the video will play in the message */
        public ?int $start_timestamp,
        /** List of available qualities of the video */
        public ?VideoQuality $qualities,
        /** Original filename as defined by the sender */
        public ?string $file_name,
        /** MIME type of the file as defined by the sender */
        public ?string $mime_type,
        /**
         * File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent
         * defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or
         * double-precision float type are safe for storing this value.
         */
        public ?int $file_size,
    ) {
    }
}
