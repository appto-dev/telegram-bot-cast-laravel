<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * Represents a link to an article or web page.
 *
 * @version Telegram Bot API 7.10
 */
final class InlineQueryResultArticle extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Unique identifier for this result, 1-64 Bytes
         * @var string
         */
        public string $id,
        /**
         * Title of the result
         * @var string
         */
        public string $title,
        /**
         * Content of the message to be sent
         * @var InputMessageContent
         */
        public InputMessageContent $input_message_content,
        /**
         * Inline keyboard attached to the message
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
        /**
         * URL of the result
         * @var string
         */
        public ?string $url,
        /**
         * Pass True if you don't want the URL to be shown in the message
         * @var bool
         */
        public ?bool $hide_url,
        /**
         * Short description of the result
         * @var string
         */
        public ?string $description,
        /**
         * Url of the thumbnail for the result
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
         * Type of the result, must be article
         * @var string
         */
        public string $type = 'article',
    ) {
    }
}
