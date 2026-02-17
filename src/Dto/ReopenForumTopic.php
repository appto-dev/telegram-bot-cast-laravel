<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to reopen a closed topic in a forum supergroup chat. The bot must be an administrator in the
 * chat for this to work and must have the <em>can_manage_topics</em> administrator rights, unless it is the
 * creator of the topic. Returns <em>True</em> on success.
 */
final class ReopenForumTopic extends Dto implements TelegramBotDto
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
