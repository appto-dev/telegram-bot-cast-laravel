<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class ChatPhoto extends Data implements TelegramType
{
    public function __construct(
        /**
         * @var  string  File identifier of small (160x160) chat photo. This file_id can be used only for photo
         * download and only for as long as the photo is not changed.
         */
        public string $small_file_id,
        /**
         * @var  string  Unique file identifier of small (160x160) chat photo, which is supposed to be the same
         * over time and for different bots. Can't be used to download or reuse the file.
         */
        public string $small_file_unique_id,
        /**
         * @var  string  File identifier of big (640x640) chat photo. This file_id can be used only for photo
         * download and only for as long as the photo is not changed.
         */
        public string $big_file_id,
        /**
         * @var  string  Unique file identifier of big (640x640) chat photo, which is supposed to be the same
         * over time and for different bots. Can't be used to download or reuse the file.
         */
        public string $big_file_unique_id,
    ) {
    }
}
