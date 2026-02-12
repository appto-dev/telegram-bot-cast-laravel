<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to decline a suggested post in a direct messages chat. The bot
 * must have the 'can_manage_direct_messages' administrator right in the
 * corresponding channel chat. Returns <em>True</em> on success.
 */
final class DeclineSuggestedPost extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier for the target direct messages chat */
        public int $chat_id,
        /** Identifier of a suggested post message to decline */
        public int $message_id,
        /** Comment for the creator of the suggested post; 0-128 characters */
        public ?string $comment,
    ) {
    }
}
