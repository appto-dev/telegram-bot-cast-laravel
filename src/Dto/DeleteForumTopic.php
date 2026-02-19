<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to delete a forum topic along with all its messages in a forum supergroup chat or a private chat with a
 * user. In the case of a supergroup chat the bot must be an administrator in the chat for this to work and must have the
 * <em>can_delete_messages</em> administrator rights. Returns <em>True</em> on success.
 */
final class DeleteForumTopic extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format
         * <code>@supergroupusername</code>)
         */
        public int|string $chat_id,
        /** Unique identifier for the target message thread of the forum topic */
        public int $message_thread_id,
    ) {
    }
}
