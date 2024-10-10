<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * Represents a contact with a phone number. By default, this contact will be sent
 * by the user. Alternatively, you can use <em>input_message_content</em> to send a
 * message with the specified content instead of the contact.
 *
 * @version Telegram Bot API 7.10
 */
final class InlineQueryResultContact extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * Unique identifier for this result, 1-64 Bytes
         * @var string
         */
        public string $id,
        /**
         * Contact's phone number
         * @var string
         */
        public string $phone_number,
        /**
         * Contact's first name
         * @var string
         */
        public string $first_name,
        /**
         * Contact's last name
         * @var string
         */
        public ?string $last_name,
        /**
         * Additional data about the contact in the form of a vCard, 0-2048 bytes
         * @var string
         */
        public ?string $vcard,
        /**
         * Inline keyboard attached to the message
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
        /**
         * Content of the message to be sent instead of the contact
         * @var InputMessageContent
         */
        public ?InputMessageContent $input_message_content,
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
         * Type of the result, must be contact
         * @var string
         */
        public string $type = 'contact',
    ) {
    }
}
