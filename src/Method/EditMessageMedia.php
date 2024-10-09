<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputMedia;
use Spatie\LaravelData\Data;

/**
 * Use this method to edit animation, audio, document, photo, or video messages. If
 * a message is part of a message album, then it can be edited only to an audio for
 * audio albums, only to a document for document albums and to a photo or a video
 * otherwise. When an inline message is edited, a new file can't be uploaded; use a
 * previously uploaded file via its file_id or specify a URL. On success, if the
 * edited message is not an inline message, the edited <a
 * href="#message">Message</a> is returned, otherwise <em>True</em> is returned.
 * Note that business messages that were not sent by the bot and do not contain an
 * inline keyboard can only be edited within 48 hours from the time they were sent.
 *
 * @version Telegram Bot API 7.10
 */
final class EditMessageMedia extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message to
         * be edited was sent
         * @var string|null
         */
        public ?string $business_connection_id,
        /**
         * Required if inline_message_id is not specified. Unique identifier for the target
         * chat or username of the target channel (in the format @channelusername)
         * @var int|string|null
         */
        public int|string|null $chat_id,
        /**
         * Required if inline_message_id is not specified. Identifier of the message to
         * edit
         * @var int|null
         */
        public ?int $message_id,
        /**
         * Required if chat_id and message_id are not specified. Identifier of the inline
         * message
         * @var string|null
         */
        public ?string $inline_message_id,
        /**
         * A JSON-serialized object for a new media content of the message
         * @var InputMedia
         */
        public InputMedia $media,
        /**
         * A JSON-serialized object for a new inline keyboard.
         * @var InlineKeyboardMarkup|null
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
