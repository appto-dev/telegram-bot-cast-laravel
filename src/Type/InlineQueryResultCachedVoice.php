<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents a link to a voice message stored on the Telegram servers. By default,
 * this voice message will be sent by the user. Alternatively, you can use
 * <em>input_message_content</em> to send a message with the specified content
 * instead of the voice message.
 *
 * @version Telegram Bot API 7.10
 */
final class InlineQueryResultCachedVoice extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of the result, must be voice
         * @var string
         */
        public string $type,
        /**
         * Unique identifier for this result, 1-64 bytes
         * @var string
         */
        public string $id,
        /**
         * A valid file identifier for the voice message
         * @var string
         */
        public string $voice_file_id,
        /**
         * Voice message title
         * @var string
         */
        public string $title,
        /**
         * Caption, 0-1024 characters after entities parsing
         * @var string|null
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the voice message caption. See formatting options
         * for more details.
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
         * Inline keyboard attached to the message
         * @var InlineKeyboardMarkup|null
         */
        public ?InlineKeyboardMarkup $reply_markup,
        /**
         * Content of the message to be sent instead of the voice message
         * @var InputMessageContent|null
         */
        public ?InputMessageContent $input_message_content,
    ) {
    }
}
