<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to clear the list of pinned messages in a chat. In private chats and channel direct messages chats, no
 * additional rights are required to unpin all pinned messages. Conversely, the bot must be an administrator with the
 * 'can_pin_messages' right or the 'can_edit_messages' right to unpin all pinned messages in groups and channels
 * respectively. Returns <em>True</em> on success.
 */
final class UnpinAllChatMessages extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier for the target chat or username of the target channel (in the format <code>@channelusername</code>) */
        public int|string $chat_id,
    ) {
    }
}
