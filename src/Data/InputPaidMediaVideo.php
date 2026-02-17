<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InputPaidMedia;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * The paid media to send is a video.
 */
final class InputPaidMediaVideo extends Data implements TelegramBotData, InputPaidMedia
{
    public function __construct(
        /** Type of the media, must be video */
        public string $type,
        /**
         * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP
         * URL for Telegram to get a file from the Internet, or pass "attach://<file_attach_name>" to upload a new one
         * using multipart/form-data under <file_attach_name> name. More information on Sending Files
         */
        public InputFile|string $media,
        /**
         * Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The
         * thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not
         * exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can
         * be only uploaded as a new file, so you can pass "attach://<file_attach_name>" if the thumbnail was uploaded
         * using multipart/form-data under <file_attach_name>. More information on Sending Files
         */
        public InputFile|string|null $thumbnail,
        /**
         * Cover for the video in the message. Pass a file_id to send a file that exists on the Telegram servers
         * (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass
         * "attach://<file_attach_name>" to upload a new one using multipart/form-data under <file_attach_name> name.
         * More information on Sending Files
         */
        public InputFile|string|null $cover,
        /** Start timestamp for the video in the message */
        public ?int $start_timestamp,
        /** Video width */
        public ?int $width,
        /** Video height */
        public ?int $height,
        /** Video duration in seconds */
        public ?int $duration,
        /** Pass True if the uploaded video is suitable for streaming */
        public ?bool $supports_streaming,
    ) {
    }
}
