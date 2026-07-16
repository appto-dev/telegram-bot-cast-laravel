<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to delete an ephemeral message. Note that it is not guaranteed that the user will receive the
 * message deletion event, especially if they are offline. Returns <em>True</em> on success.
 */
final class DeleteEphemeralMessage extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup in the format
         * <code>@username</code>
         */
        public int|string $chat_id,
        /** Identifier of the user who received the message */
        public int $receiver_user_id,
        /** Identifier of the ephemeral message to delete */
        public int $ephemeral_message_id,
    ) {
    }
}
