<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents a link to a photo stored on the Telegram servers. By default, this
 * photo will be sent by the user with an optional caption. Alternatively, you can
 * use <em>input_message_content</em> to send a message with the specified content
 * instead of the photo.
 *
 * @version Telegram Bot API 7.10
 */
final class InlineQueryResultCachedPhoto extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of the result, must be photo
         * @var string
         */
        public string $type,
        /**
         * Unique identifier for this result, 1-64 bytes
         * @var string
         */
        public string $id,
        /**
         * A valid file identifier of the photo
         * @var string
         */
        public string $photo_file_id,
        /**
         * Title for the result
         * @var string|null
         */
        public ?string $title,
        /**
         * Short description of the result
         * @var string|null
         */
        public ?string $description,
        /**
         * Caption of the photo to be sent, 0-1024 characters after entities parsing
         * @var string|null
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the photo caption. See formatting options for more
         * details.
         * @var string|null
         */
        public ?string $parse_mode,
        /**
         * List of special entities that appear in the caption, which can be specified
         * instead of parse_mode
         * @var MessageEntity|null
         */
        public ?MessageEntity $caption_entities,
        /**
         * Pass True, if the caption must be shown above the message media
         * @var bool|null
         */
        public ?bool $show_caption_above_media,
        /**
         * Inline keyboard attached to the message
         * @var InlineKeyboardMarkup|null
         */
        public ?InlineKeyboardMarkup $reply_markup,
        /**
         * Content of the message to be sent instead of the photo
         * @var InputMessageContent|null
         */
        public ?InputMessageContent $input_message_content,
    ) {
    }
}
