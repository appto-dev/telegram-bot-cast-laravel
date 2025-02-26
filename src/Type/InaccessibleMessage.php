<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object describes a message that was deleted or is otherwise inaccessible to
 * the bot.
 */
final class InaccessibleMessage extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Chat the message belonged to
         * @var Chat
         */
        public Chat $chat,
        /**
         * Unique message identifier inside the chat
         * @var int
         */
        public int $message_id,
        /**
         * Always 0. The field can be used to differentiate regular and inaccessible
         * messages.
         * @var int
         */
        public int $date,
    ) {
    }
}
