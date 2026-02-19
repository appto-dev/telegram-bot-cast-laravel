<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * This object represents a file ready to be downloaded. The file can be downloaded via the link
 * https://api.telegram.org/file/bot<token>/<file_path>. It is guaranteed that the link will be valid for at least 1 hour.
 * When the link expires, a new one can be requested by calling <a
 * href="https://core.telegram.org/bots/api#getfile">getFile</a>.
 * The maximum file size to download is 20 MB
 */
final class File extends Data implements TelegramBotData
{
    public function __construct(
        /** Identifier for this file, which can be used to download or reuse the file */
        public string $file_id,
        /**
         * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to
         * download or reuse the file.
         */
        public string $file_unique_id,
        /**
         * File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in
         * interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are
         * safe for storing this value.
         */
        public ?int $file_size,
        /** File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file. */
        public ?string $file_path,
    ) {
    }
}
