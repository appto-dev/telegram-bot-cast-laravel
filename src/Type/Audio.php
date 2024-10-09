<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents an audio file to be treated as music by the Telegram
 * clients.
 *
 * @version Telegram Bot API 7.10
 */
final class Audio extends Data implements TelegramTypeContract
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
         * Duration of the audio in seconds as defined by the sender
         * @var int
         */
        public int $duration,
        /**
         * Performer of the audio as defined by the sender or by audio tags
         * @var string|null
         */
        public ?string $performer,
        /**
         * Title of the audio as defined by the sender or by audio tags
         * @var string|null
         */
        public ?string $title,
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
        /**
         * Thumbnail of the album cover to which the music file belongs
         * @var PhotoSize|null
         */
        public ?PhotoSize $thumbnail,
    ) {
    }
}
