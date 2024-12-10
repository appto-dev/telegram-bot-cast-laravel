<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * This object represents reaction changes on a message with anonymous reactions.
 */
final class MessageReactionCountUpdated extends Data implements TelegramTypeInterface
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
         * @var ReactionCount[]
         */
        public array $reactions,
    ) {
    }
}
