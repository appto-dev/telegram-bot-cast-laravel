<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The paid media to send is a video.
 *
 * @version Telegram Bot API 7.11
 */
final class InputPaidMediaVideo extends Data implements TelegramTypeInterface
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
         * Video width
         * @var int
         */
        public ?int $width,
        /**
         * Video height
         * @var int
         */
        public ?int $height,
        /**
         * Video duration in seconds
         * @var int
         */
        public ?int $duration,
        /**
         * Pass True if the uploaded video is suitable for streaming
         * @var bool
         */
        public ?bool $supports_streaming,
        /**
         * Type of the media, must be video
         * @var string
         */
        public string $type = 'video',
    ) {
    }
}
