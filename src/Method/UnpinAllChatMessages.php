<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to clear the list of pinned messages in a chat. In private chats
 * and channel direct messages chats, no additional rights are required to unpin
 * all pinned messages. Conversely, the bot must be an administrator with the
 * 'can_pin_messages' right or the 'can_edit_messages' right to unpin all pinned
 * messages in groups and channels respectively. Returns <em>True</em> on success.
 */
final class UnpinAllChatMessages extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the
         * format <code>@channelusername</code>)
         * @var int|string
         */
        public int|string $chat_id,
    ) {
    }
}
