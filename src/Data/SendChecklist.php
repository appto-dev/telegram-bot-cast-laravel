<?php

namespace Appto\TelegramBot\Data;

use Appto\TelegramBot\Interfaces\TelegramBotData;
use Spatie\LaravelData\Data;

/**
 * Use this method to send a checklist on behalf of a connected business account.
 * On success, the sent <a
 * href="https://core.telegram.org/bots/api#message">Message</a> is returned.
 */
final class SendChecklist extends Data implements TelegramBotData
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be sent
         */
        public string $business_connection_id,
        /** Unique identifier for the target chat */
        public int $chat_id,
        /** A JSON-serialized object for the checklist to send */
        public InputChecklist $checklist,
        /** Sends the message silently. Users will receive a notification with no sound. */
        public ?bool $disable_notification,
        /** Protects the contents of the sent message from forwarding and saving */
        public ?bool $protect_content,
        /** Unique identifier of the message effect to be added to the message */
        public ?string $message_effect_id,
        /** A JSON-serialized object for description of the message to reply to */
        public ?ReplyParameters $reply_parameters,
        /** A JSON-serialized object for an inline keyboard */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
