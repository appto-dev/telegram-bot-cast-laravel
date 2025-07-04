<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\InlineKeyboardMarkup;
use Appto\TelegramBot\Type\InputChecklist;
use Spatie\LaravelData\Data;

/**
 * Use this method to edit a checklist on behalf of a connected business account.
 * On success, the edited <a href="#message">Message</a> is returned.
 */
final class EditMessageChecklist extends Data implements TelegramMethodInterface
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
         * Unique identifier for the target message
         * @var int
         */
        public int $message_id,
        /**
         * A JSON-serialized object for the new checklist
         * @var InputChecklist
         */
        public InputChecklist $checklist,
        /**
         * A JSON-serialized object for the new inline keyboard for the message
         * @var InlineKeyboardMarkup
         */
        public ?InlineKeyboardMarkup $reply_markup,
    ) {
    }
}
