<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents one size of a photo or a <a href="https://core.telegram.org/bots/api#document">file</a> / <a
 * href="https://core.telegram.org/bots/api#sticker">sticker</a> thumbnail.
 */
final class PhotoSize extends Data implements TelegramBotData
{
    public function __construct(
        /** Identifier for this file, which can be used to download or reuse the file */
        public string $file_id,
        /**
         * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to
         * download or reuse the file.
         */
        public string $file_unique_id,
        /** Photo width */
        public int $width,
        /** Photo height */
        public int $height,
        /** File size in bytes */
        public ?int $file_size,
    ) {
    }
}
