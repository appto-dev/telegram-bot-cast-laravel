<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents a link to a file stored on the Telegram servers. By default, this
 * file will be sent by the user with an optional caption. Alternatively, you can
 * use <em>input_message_content</em> to send a message with the specified content
 * instead of the file.
 *
 * @version Telegram Bot API 7.10
 */
final class InlineQueryResultCachedDocument extends Data implements TelegramTypeInterface
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
         * A valid file identifier for the file
         * @var string
         */
        public string $document_file_id,
        /**
         * Short description of the result
         * @var string
         */
        public ?string $description,
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
         * Type of the result, must be document
         * @var string
         */
        public string $type = 'document',
    ) {
    }
}
