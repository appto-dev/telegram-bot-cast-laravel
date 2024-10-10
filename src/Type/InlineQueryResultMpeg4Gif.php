<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound).
 * By default, this animated MPEG-4 file will be sent by the user with optional
 * caption. Alternatively, you can use <em>input_message_content</em> to send a
 * message with the specified content instead of the animation.
 *
 * @version Telegram Bot API 7.10
 */
final class InlineQueryResultMpeg4Gif extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         * @var string
         */
        public string $id,
        /**
         * A valid URL for the MPEG4 file. File size must not exceed 1MB
         * @var string
         */
        public string $mpeg4_url,
        /**
         * Video width
         * @var int
         */
        public ?int $mpeg4_width,
        /**
         * Video height
         * @var int
         */
        public ?int $mpeg4_height,
        /**
         * Video duration in seconds
         * @var int
         */
        public ?int $mpeg4_duration,
        /**
         * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
         * @var string
         */
        public string $thumbnail_url,
        /**
         * MIME type of the thumbnail, must be one of "image/jpeg", "image/gif", or
         * "video/mp4". Defaults to "image/jpeg"
         * @var string
         */
        public ?string $thumbnail_mime_type,
        /**
         * Title for the result
         * @var string
         */
        public ?string $title,
        /**
         * Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
         * @var string
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the caption. See formatting options for more
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
         * Inline keyboard attached to the message
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
        /**
         * Content of the message to be sent instead of the video animation
         * @var InputMessageContent
         */
        public ?InputMessageContent $input_message_content,
        /**
         * Type of the result, must be mpeg4_gif
         * @var string
         */
        public string $type = 'mpeg4_gif',
    ) {
    }
}
