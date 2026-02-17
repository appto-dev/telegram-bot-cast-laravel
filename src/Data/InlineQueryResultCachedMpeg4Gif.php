<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\InlineQueryResult;
use Appto\TelegramBot\Interfaces\InputMessageContent;
use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound) stored on the Telegram servers.
 * By default, this animated MPEG-4 file will be sent by the user with an optional caption. Alternatively, you
 * can use <em>input_message_content</em> to send a message with the specified content instead of the animation.
 */
final class InlineQueryResultCachedMpeg4Gif extends Data implements TelegramBotData, InlineQueryResult
{
    public function __construct(
        /** Type of the result, must be mpeg4_gif */
        public string $type,
        /** Unique identifier for this result, 1-64 bytes */
        public string $id,
        /** A valid file identifier for the MPEG4 file */
        public string $mpeg4_file_id,
        /** Title for the result */
        public ?string $title,
        /** Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing */
        public ?string $caption,
        /** Mode for parsing entities in the caption. See formatting options for more details. */
        public ?string $parse_mode,
        /** List of special entities that appear in the caption, which can be specified instead of parse_mode */
        public ?MessageEntity $caption_entities,
        /** Pass True, if the caption must be shown above the message media */
        public ?bool $show_caption_above_media,
        /** Inline keyboard attached to the message */
        public ?InlineKeyboardMarkup $reply_markup,
        /** Content of the message to be sent instead of the video animation */
        public ?InputMessageContent $input_message_content,
    ) {
    }
}
