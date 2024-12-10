<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents a link to an MP3 audio file stored on the Telegram servers. By
 * default, this audio file will be sent by the user. Alternatively, you can use
 * <em>input_message_content</em> to send a message with the specified content
 * instead of the audio.
 */
final class InlineQueryResultCachedAudio extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         * @var string
         */
        public string $id,
        /**
         * A valid file identifier for the audio file
         * @var string
         */
        public string $audio_file_id,
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
         * Inline keyboard attached to the message
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
        /**
         * Content of the message to be sent instead of the audio
         * @var InputMessageContent
         */
        public ?InputMessageContent $input_message_content,
        /**
         * Type of the result, must be audio
         * @var string
         */
        public string $type = 'audio',
    ) {
    }
}
