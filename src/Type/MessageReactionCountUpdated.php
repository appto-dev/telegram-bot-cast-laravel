<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * This object represents reaction changes on a message with anonymous reactions.
 *
 * @version Telegram Bot API 7.10
 */
final class MessageReactionCountUpdated extends Data implements TelegramTypeContract
{
    public function __construct(
        /**
         * The chat containing the message
         * @var Chat
         */
        public Chat $chat,
        /**
         * Unique message identifier inside the chat
         * @var int
         */
        public int $message_id,
        /**
         * Date of the change in Unix time
         * @var int
         */
        public int $date,
        /**
         * List of reactions that are present on the message
         * @var array<ReactionCount>
         */
        public ReactionCount $reactions,
    ) {
    }
}
