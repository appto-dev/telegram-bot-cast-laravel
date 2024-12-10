<?php
namespace Appto\TelegramBot\Type;

use Appto\TelegramBot\Interface\TelegramTypeInterface;
use Spatie\LaravelData\Data;

/**
 * The message was originally sent on behalf of a chat to a group chat.
 */
final class MessageOriginChat extends Data implements TelegramTypeInterface
{
    public function __construct(
        /**
         * Type of the message origin, always "chat"
         * @var string
         */
        public string $type,
        /**
         * Date the message was sent originally in Unix time
         * @var int
         */
        public int $date,
        /**
         * Chat that sent the message originally
         * @var Chat
         */
        public Chat $sender_chat,
        /**
         * For messages originally sent by an anonymous chat administrator, original
         * message author signature
         * @var string
         */
        public ?string $author_signature,
    ) {
    }
}
