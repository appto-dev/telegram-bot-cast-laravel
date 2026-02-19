<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns <em>True</em> on
 * success.
 */
final class SetChatAdministratorCustomTitle extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target supergroup (in the format
         * <code>@supergroupusername</code>)
         */
        public int|string $chat_id,
        /** Unique identifier of the target user */
        public int $user_id,
        /** New custom title for the administrator; 0-16 characters, emoji are not allowed */
        public string $custom_title,
    ) {
    }
}
