<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Type;

use Spatie\LaravelData\Data;

/**
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * Optional fields may be not returned when irrelevant.
 */
class InputMediaAudio extends Data implements TelegramType, InputPollMedia, InputMedia
{
    public function __construct(
        /** @var  string  Type of the media, must be audio */
        public string $type,
        /**
         * @var  InputFile|string  File to send. Pass a file_id to send a file that exists on the Telegram
         * servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass
         * "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name>
         * name. More information on Sending Files
         */
        public InputFile|string $media,
        /**
         * @var  InputFile|string|null  Thumbnail of the file sent; can be ignored if thumbnail generation for
         * the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in
         * size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded
         * using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you
         * can pass "attach://<file_attach_name>" if the thumbnail was uploaded using multipart/form-data under
         * <file_attach_name>. More information on Sending Files
         */
        public InputFile|string|null $thumbnail,
        /** @var  string|null  Caption of the audio to be sent, 0-1024 characters after entities parsing */
        public ?string $caption,
        /**
         * @var  string|null  Mode for parsing entities in the audio caption. See formatting options for more
         * details.
         */
        public ?string $parse_mode,
        /**
         * @var  MessageEntity[]|null  List of special entities that appear in the caption, which can be
         * specified instead of parse_mode
         */
        public ?array $caption_entities,
        /** @var  int|null  Duration of the audio in seconds */
        public ?int $duration,
        /** @var  string|null  Performer of the audio */
        public ?string $performer,
        /** @var  string|null  Title of the audio */
        public ?string $title,
    ) {
    }
}
