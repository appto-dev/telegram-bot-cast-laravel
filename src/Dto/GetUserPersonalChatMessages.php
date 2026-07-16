<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to get the last messages from the personal chat (i.e., the chat currently added to their
 * profile) of a given user. On success, an Array of <a
 * href="https://core.telegram.org/bots/api#message">Message</a> objects is returned.
 */
final class GetUserPersonalChatMessages extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier for the target user */
        public int $user_id,
        /** The maximum number of messages to return; 1-20 */
        public int $limit,
    ) {
    }
}
