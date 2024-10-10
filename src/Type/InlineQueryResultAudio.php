<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents a link to an MP3 audio file. By default, this audio file will be sent
 * by the user. Alternatively, you can use <em>input_message_content</em> to send a
 * message with the specified content instead of the audio.
 *
 * @version Telegram Bot API 7.10
 */
final class InlineQueryResultAudio extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Type of the result, must be audio
         * @var string
         */
        public string $type,
        /**
         * Unique identifier for this result, 1-64 bytes
         * @var string
         */
        public string $id,
        /**
         * A valid URL for the audio file
         * @var string
         */
        public string $audio_url,
        /**
         * Title
         * @var string
         */
        public string $title,
        /**
         * Caption, 0-1024 characters after entities parsing
         * @var string
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the audio caption. See formatting options for more
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
         * Performer
         * @var string
         */
        public ?string $performer,
        /**
         * Audio duration in seconds
         * @var int
         */
        public ?int $audio_duration,
        /**
         * Inline keyboard attached to the message
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
        /**
         * Content of the message to be sent instead of the audio
         * @var InputMessageContent
         */
        public ?InputMessageContent $input_message_content,
    ) {
    }
}
