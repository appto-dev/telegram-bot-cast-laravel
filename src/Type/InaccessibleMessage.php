<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object describes a message that was deleted or is otherwise inaccessible to
 * the bot.
 *
 * @version Telegram Bot API 7.10
 */
final class InaccessibleMessage extends Data implements TelegramTypeContract
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
