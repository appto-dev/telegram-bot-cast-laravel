<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents a link to a photo. By default, this photo will be sent by the user
 * with optional caption. Alternatively, you can use <em>input_message_content</em>
 * to send a message with the specified content instead of the photo.
 *
 * @version Telegram Bot API 7.10
 */
final class InlineQueryResultPhoto extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         * @var string
         */
        public string $id,
        /**
         * A valid URL of the photo. Photo must be in JPEG format. Photo size must not
         * exceed 5MB
         * @var string
         */
        public string $photo_url,
        /**
         * URL of the thumbnail for the photo
         * @var string
         */
        public string $thumbnail_url,
        /**
         * Width of the photo
         * @var int
         */
        public ?int $photo_width,
        /**
         * Height of the photo
         * @var int
         */
        public ?int $photo_height,
        /**
         * Title for the result
         * @var string
         */
        public ?string $title,
        /**
         * Short description of the result
         * @var string
         */
        public ?string $description,
        /**
         * Caption of the photo to be sent, 0-1024 characters after entities parsing
         * @var string
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the photo caption. See formatting options for more
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
         * Content of the message to be sent instead of the photo
         * @var InputMessageContent
         */
        public ?InputMessageContent $input_message_content,
        /**
         * Type of the result, must be photo
         * @var string
         */
        public string $type = 'photo',
    ) {
    }
}
