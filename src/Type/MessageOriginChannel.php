<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Contracts\TelegramTypeContract;
use Spatie\LaravelData\Data;

/**
 * The message was originally sent to a channel chat.
 *
 * @version Telegram Bot API 7.10
 */
final class MessageOriginChannel extends Data implements TelegramTypeContract
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
         * @var string|null
         */
        public ?string $author_signature,
    ) {
    }
}
