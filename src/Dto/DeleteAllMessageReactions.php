<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to remove up to 10000 recent reactions in a group or a supergroup chat added by a given user
 * or chat. The bot must have the 'can_delete_messages' administrator right in the chat. Returns <em>True</em> on
 * success.
 */
final class DeleteAllMessageReactions extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup in the format
         * <code>@username</code>
         */
        public int|string $chat_id,
        /** Identifier of the user whose reactions will be removed, if the reactions were added by a user */
        public ?int $user_id,
        /** Identifier of the chat whose reactions will be removed, if the reactions were added by a chat */
        public ?int $actor_chat_id,
    ) {
    }
}
