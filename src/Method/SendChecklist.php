<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputChecklist;
use Appto\TelegramBot\Type\ReplyParameters;
use Spatie\LaravelData\Data;

/**
 * Use this method to send a checklist on behalf of a connected business account.
 * On success, the sent <a href="#message">Message</a> is returned.
 */
final class SendChecklist extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be sent
         * @var string
         */
        public string $business_connection_id,
        /**
         * Unique identifier for the target chat
         * @var int
         */
        public int $chat_id,
        /**
         * A JSON-serialized object for the checklist to send
         * @var InputChecklist
         */
        public InputChecklist $checklist,
        /**
         * Sends the message silently. Users will receive a notification with no sound.
         * @var bool
         */
        public ?bool $disable_notification,
        /**
         * Protects the contents of the sent message from forwarding and saving
         * @var bool
         */
        public ?bool $protect_content,
        /**
         * Unique identifier of the message effect to be added to the message
         * @var string
         */
        public ?string $message_effect_id,
        /**
         * A JSON-serialized object for description of the message to reply to
         * @var ReplyParameters
         */
        public ?ReplyParameters $reply_parameters,
        /**
         * A JSON-serialized object for an inline keyboard
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
