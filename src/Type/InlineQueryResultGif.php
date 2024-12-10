<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents a link to an animated GIF file. By default, this animated GIF file
 * will be sent by the user with optional caption. Alternatively, you can use
 * <em>input_message_content</em> to send a message with the specified content
 * instead of the animation.
 */
final class InlineQueryResultGif extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         * @var string
         */
        public string $id,
        /**
         * A valid URL for the GIF file. File size must not exceed 1MB
         * @var string
         */
        public string $gif_url,
        /**
         * Width of the GIF
         * @var int
         */
        public ?int $gif_width,
        /**
         * Height of the GIF
         * @var int
         */
        public ?int $gif_height,
        /**
         * Duration of the GIF in seconds
         * @var int
         */
        public ?int $gif_duration,
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
         * Caption of the GIF file to be sent, 0-1024 characters after entities parsing
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
         * Content of the message to be sent instead of the GIF animation
         * @var InputMessageContent
         */
        public ?InputMessageContent $input_message_content,
        /**
         * Type of the result, must be gif
         * @var string
         */
        public string $type = 'gif',
    ) {
    }
}
