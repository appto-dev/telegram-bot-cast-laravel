<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a live photo.
 */
final class LivePhoto extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Available sizes of the corresponding static photo
         * @var array<PhotoSize>
         */
        public ?array $photo,
        /** Identifier for the video file which can be used to download or reuse the file */
        public string $file_id,
        /**
         * Unique identifier for the video file which is supposed to be the same over time and for different bots. Can't
         * be used to download or reuse the file.
         */
        public string $file_unique_id,
        /** Video width as defined by the sender */
        public int $width,
        /** Video height as defined by the sender */
        public int $height,
        /** Duration of the video in seconds as defined by the sender */
        public int $duration,
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
