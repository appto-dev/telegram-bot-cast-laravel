<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents a link to a page containing an embedded video player or a video file.
 * By default, this video file will be sent by the user with an optional caption.
 * Alternatively, you can use <em>input_message_content</em> to send a message with
 * the specified content instead of the video.
 * If an InlineQueryResultVideo message contains an embedded video (e.g., YouTube),
 * you must replace its content using <em>input_message_content</em>.
 *
 * @version Telegram Bot API 7.11
 */
final class InlineQueryResultVideo extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         * @var string
         */
        public string $id,
        /**
         * A valid URL for the embedded video player or video file
         * @var string
         */
        public string $video_url,
        /**
         * MIME type of the content of the video URL, "text/html" or "video/mp4"
         * @var string
         */
        public string $mime_type,
        /**
         * URL of the thumbnail (JPEG only) for the video
         * @var string
         */
        public string $thumbnail_url,
        /**
         * Title for the result
         * @var string
         */
        public string $title,
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
        public ?int $video_width,
        /**
         * Video height
         * @var int
         */
        public ?int $video_height,
        /**
         * Video duration in seconds
         * @var int
         */
        public ?int $video_duration,
        /**
         * Short description of the result
         * @var string
         */
        public ?string $description,
        /**
         * Inline keyboard attached to the message
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
        /**
         * Content of the message to be sent instead of the video. This field is required
         * if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a
         * YouTube video).
         * @var InputMessageContent
         */
        public ?InputMessageContent $input_message_content,
        /**
         * Type of the result, must be video
         * @var string
         */
        public string $type = 'video',
    ) {
    }
}
