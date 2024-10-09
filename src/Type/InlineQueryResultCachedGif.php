<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents a link to an animated GIF file stored on the Telegram servers. By
 * default, this animated GIF file will be sent by the user with an optional
 * caption. Alternatively, you can use <em>input_message_content</em> to send a
 * message with specified content instead of the animation.
 *
 * @version Telegram Bot API 7.10
 */
final class InlineQueryResultCachedGif extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of the result, must be gif
         * @var string
         */
        public string $type,
        /**
         * Unique identifier for this result, 1-64 bytes
         * @var string
         */
        public string $id,
        /**
         * A valid file identifier for the GIF file
         * @var string
         */
        public string $gif_file_id,
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
         * @var array<MessageEntity>
         */
        public ?MessageEntity $caption_entities,
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
    ) {
    }
}
