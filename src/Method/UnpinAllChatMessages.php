<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Spatie\LaravelData\Data;

/**
 * Use this method to clear the list of pinned messages in a chat. If the chat is
 * not a private chat, the bot must be an administrator in the chat for this to
 * work and must have the 'can_pin_messages' administrator right in a supergroup or
 * 'can_edit_messages' administrator right in a channel. Returns <em>True</em> on
 * success.
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
