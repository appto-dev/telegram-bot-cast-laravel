<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents a general file (as opposed to <a
 * href="#photosize">photos</a>, <a href="#voice">voice messages</a> and <a
 * href="#audio">audio files</a>).
 *
 * @version Telegram Bot API 7.10
 */
final class Document extends Data implements TelegramTypeInterface
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
         * Document thumbnail as defined by the sender
         * @var PhotoSize
         */
        public ?PhotoSize $thumbnail,
        /**
         * Original filename as defined by the sender
         * @var string
         */
        public ?string $file_name,
        /**
         * MIME type of the file as defined by the sender
         * @var string
         */
        public ?string $mime_type,
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
