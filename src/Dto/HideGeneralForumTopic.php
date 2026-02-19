<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to hide the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for
 * this to work and must have the <em>can_manage_topics</em> administrator rights. The topic will be automatically closed
 * if it was open. Returns <em>True</em> on success.
 */
final class HideGeneralForumTopic extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format
         * <code>@supergroupusername</code>)
         */
        public int|string $chat_id,
    ) {
    }
}
