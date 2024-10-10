<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents a video to be sent.
 *
 * @version Telegram Bot API 7.10
 */
final class InputMediaVideo extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * File to send. Pass a file_id to send a file that exists on the Telegram servers
         * (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or
         * pass "attach://&lt;file_attach_name&gt;" to upload a new one using
         * multipart/form-data under &lt;file_attach_name&gt; name. More information on
         * Sending Files
         * @var InputFile|string
         */
        public InputFile|string $media,
        /**
         * Thumbnail of the file sent; can be ignored if thumbnail generation for the file
         * is supported server-side. The thumbnail should be in JPEG format and less than
         * 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if
         * the file is not uploaded using multipart/form-data. Thumbnails can't be reused
         * and can be only uploaded as a new file, so you can pass
         * "attach://&lt;file_attach_name&gt;" if the thumbnail was uploaded using
         * multipart/form-data under &lt;file_attach_name&gt;. More information on Sending
         * Files
         * @var InputFile|string
         */
        public InputFile|string|null $thumbnail,
        /**
         * Caption of the video to be sent, 0-1024 characters after entities parsing
         * @var string
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the video caption. See formatting options for more
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
         * Pass True, if the caption must be shown above the message media
         * @var bool
         */
        public ?bool $show_caption_above_media,
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
         * Pass True if the video needs to be covered with a spoiler animation
         * @var bool
         */
        public ?bool $has_spoiler,
        /**
         * Type of the result, must be video
         * @var string
         */
        public string $type = 'video',
    ) {
    }
}
