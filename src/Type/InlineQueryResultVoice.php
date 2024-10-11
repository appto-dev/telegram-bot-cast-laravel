<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents a link to a voice recording in an .OGG container encoded with OPUS.
 * By default, this voice recording will be sent by the user. Alternatively, you
 * can use <em>input_message_content</em> to send a message with the specified
 * content instead of the the voice message.
 *
 * @version Telegram Bot API 7.10
 */
final class InlineQueryResultVoice extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         * @var string
         */
        public string $id,
        /**
         * A valid URL for the voice recording
         * @var string
         */
        public string $voice_url,
        /**
         * Recording title
         * @var string
         */
        public string $title,
        /**
         * Caption, 0-1024 characters after entities parsing
         * @var string
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the voice message caption. See formatting options
         * for more details.
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
         * Recording duration in seconds
         * @var int
         */
        public ?int $voice_duration,
        /**
         * Inline keyboard attached to the message
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
        /**
         * Content of the message to be sent instead of the voice recording
         * @var InputMessageContent
         */
        public ?InputMessageContent $input_message_content,
        /**
         * Type of the result, must be voice
         * @var string
         */
        public string $type = 'voice',
    ) {
    }
}
