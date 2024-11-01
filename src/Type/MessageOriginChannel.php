<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The message was originally sent to a channel chat.
 *
 * @version Telegram Bot API 7.11
 */
final class MessageOriginChannel extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the message origin, always "channel"
         * @var string
         */
        public string $type,
        /**
         * Date the message was sent originally in Unix time
         * @var int
         */
        public int $date,
        /**
         * Channel chat to which the message was originally sent
         * @var Chat
         */
        public Chat $chat,
        /**
         * Unique message identifier inside the chat
         * @var int
         */
        public int $message_id,
        /**
         * Signature of the original post author
         * @var string
         */
        public ?string $author_signature,
    ) {
    }
}
