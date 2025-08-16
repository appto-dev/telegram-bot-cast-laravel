<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to remove a message from the list of pinned messages in a chat.
 * In private chats and channel direct messages chats, all messages can be
 * unpinned. Conversely, the bot must be an administrator with the
 * 'can_pin_messages' right or the 'can_edit_messages' right to unpin messages in
 * groups and channels respectively. Returns <em>True</em> on success.
 */
final class UnpinChatMessage extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier of the business connection on behalf of which the message will
         * be unpinned
         * @var string
         */
        public ?string $business_connection_id,
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
        /**
         * Identifier of the message to unpin. Required if <em>business_connection_id</em>
         * is specified. If not specified, the most recent pinned message (by sending date)
         * will be unpinned.
         * @var int
         */
        public ?int $message_id,
    ) {
    }
}
