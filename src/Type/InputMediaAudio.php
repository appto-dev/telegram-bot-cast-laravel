<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents an audio file to be treated as music to be sent.
 *
 * @version Telegram Bot API 7.11
 */
final class InputMediaAudio extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * File to send. Pass a file_id to send a file that exists on the Telegram servers
         * (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or
         * pass "attach://<file_attach_name>" to upload a new one using multipart/form-data
         * under <file_attach_name> name. More information on Sending Files
         * @var InputFile|string
         */
        public InputFile|string $media,
        /**
         * Thumbnail of the file sent; can be ignored if thumbnail generation for the file
         * is supported server-side. The thumbnail should be in JPEG format and less than
         * 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if
         * the file is not uploaded using multipart/form-data. Thumbnails can't be reused
         * and can be only uploaded as a new file, so you can pass
         * "attach://<file_attach_name>" if the thumbnail was uploaded using
         * multipart/form-data under <file_attach_name>. More information on Sending Files
         * @var InputFile|string
         */
        public InputFile|string|null $thumbnail,
        /**
         * Caption of the audio to be sent, 0-1024 characters after entities parsing
         * @var string
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the audio caption. See formatting options for more
         * details.
         * @var string
         */
        public ?string $parse_mode,
        /**
         * List of special entities that appear in the caption, which can be specified
         * instead of parse_mode
         * @var MessageEntity[]
         */
        public ?array $caption_entities,
        /**
         * Duration of the audio in seconds
         * @var int
         */
        public ?int $duration,
        /**
         * Performer of the audio
         * @var string
         */
        public ?string $performer,
        /**
         * Title of the audio
         * @var string
         */
        public ?string $title,
        /**
         * Type of the result, must be audio
         * @var string
         */
        public string $type = 'audio',
    ) {
    }
}
