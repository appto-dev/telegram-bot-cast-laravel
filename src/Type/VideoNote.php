<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class VideoNote extends Data implements TelegramType
{
    public function __construct(
        /** @var  string  Identifier for this file, which can be used to download or reuse the file */
        public string $file_id,
        /**
         * @var  string  Unique identifier for this file, which is supposed to be the same over time and for
         * different bots. Can't be used to download or reuse the file.
         */
        public string $file_unique_id,
        /** @var  int  Video width and height (diameter of the video message) as defined by the sender */
        public int $length,
        /** @var  int  Duration of the video in seconds as defined by the sender */
        public int $duration,
        /** @var  PhotoSize|null  Video thumbnail */
        public ?PhotoSize $thumbnail,
        /** @var  int|null  File size in bytes */
        public ?int $file_size,
    ) {
    }
}
