<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Spatie\LaravelData\Data;

/**
 * Use this method to edit only the reply markup of messages. On success, if the
 * edited message is not an inline message, the edited <a
 * href="#message">Message</a> is returned, otherwise <em>True</em> is returned.
 * Note that business messages that were not sent by the bot and do not contain an
 * inline keyboard can only be edited within 48 hours from the time they were sent.
 *
 * @version Telegram Bot API 7.10
 */
final class EditMessageReplyMarkup extends Data implements TelegramMethodContract
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
         * A JSON-serialized object for an inline keyboard.
         * @var InlineKeyboardMarkup|null
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
