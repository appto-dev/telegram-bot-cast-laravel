<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to remove a reaction from a message in a group or a supergroup chat. The bot must have the
 * 'can_delete_messages' administrator right in the chat. Returns <em>True</em> on success.
 */
final class DeleteMessageReaction extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup in the format
         * <code>@username</code>
         */
        public int|string $chat_id,
        /** Identifier of the target message */
        public int $message_id,
        /** Identifier of the user whose reaction will be removed, if the reaction was added by a user */
        public ?int $user_id,
        /** Identifier of the chat whose reaction will be removed, if the reaction was added by a chat */
        public ?int $actor_chat_id,
    ) {
    }
}
