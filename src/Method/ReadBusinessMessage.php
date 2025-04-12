<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Marks incoming message as read on behalf of a business account. Requires the
 * <em>can_read_messages</em> business bot right. Returns <em>True</em> on success.
 */
final class ReadBusinessMessage extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which to read the
         * message
         * @var string
         */
        public string $business_connection_id,
        /**
         * Unique identifier of the chat in which the message was received. The chat must
         * have been active in the last 24 hours.
         * @var int
         */
        public int $chat_id,
        /**
         * Unique identifier of the message to mark as read
         * @var int
         */
        public int $message_id,
    ) {
    }
}
