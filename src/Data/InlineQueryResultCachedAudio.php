<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InlineQueryResult;
use Appto\TelegramBot\Interfaces\InputMessageContent;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents a link to an MP3 audio file stored on the Telegram servers. By default, this audio file will be
 * sent by the user. Alternatively, you can use <em>input_message_content</em> to send a message with the
 * specified content instead of the audio.
 */
final class InlineQueryResultCachedAudio extends Data implements TelegramBotData, InlineQueryResult
{
    public function __construct(
        /** Type of the result, must be audio */
        public string $type,
        /** Unique identifier for this result, 1-64 bytes */
        public string $id,
        /** A valid file identifier for the audio file */
        public string $audio_file_id,
        /** Caption, 0-1024 characters after entities parsing */
        public ?string $caption,
        /** Mode for parsing entities in the audio caption. See formatting options for more details. */
        public ?string $parse_mode,
        /** List of special entities that appear in the caption, which can be specified instead of parse_mode */
        public ?MessageEntity $caption_entities,
        /** Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /** Content of the message to be sent instead of the audio */
        public ?InputMessageContent $input_message_content,
    ) {
    }
}
