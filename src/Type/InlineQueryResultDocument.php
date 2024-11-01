<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents a link to a file. By default, this file will be sent by the user with
 * an optional caption. Alternatively, you can use <em>input_message_content</em>
 * to send a message with the specified content instead of the file. Currently,
 * only .PDF and .ZIP files can be sent using this method.
 *
 * @version Telegram Bot API 7.11
 */
final class InlineQueryResultDocument extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier for this result, 1-64 bytes
         * @var string
         */
        public string $id,
        /**
         * Title for the result
         * @var string
         */
        public string $title,
        /**
         * Caption of the document to be sent, 0-1024 characters after entities parsing
         * @var string
         */
        public ?string $caption,
        /**
         * Mode for parsing entities in the document caption. See formatting options for
         * more details.
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
         * A valid URL for the file
         * @var string
         */
        public string $document_url,
        /**
         * MIME type of the content of the file, either "application/pdf" or
         * "application/zip"
         * @var string
         */
        public string $mime_type,
        /**
         * Short description of the result
         * @var string
         */
        public ?string $description,
        /**
         * Inline keyboard attached to the message
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
        /**
         * Content of the message to be sent instead of the file
         * @var InputMessageContent
         */
        public ?InputMessageContent $input_message_content,
        /**
         * URL of the thumbnail (JPEG only) for the file
         * @var string
         */
        public ?string $thumbnail_url,
        /**
         * Thumbnail width
         * @var int
         */
        public ?int $thumbnail_width,
        /**
         * Thumbnail height
         * @var int
         */
        public ?int $thumbnail_height,
        /**
         * Type of the result, must be document
         * @var string
         */
        public string $type = 'document',
    ) {
    }
}
