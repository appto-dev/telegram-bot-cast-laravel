<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Verifies a chat <a href="https://telegram.org/verify#third-party-verification">on behalf of the
 * organization</a> which is represented by the bot. Returns <em>True</em> on success.
 */
final class VerifyChat extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * Unique identifier for the target chat or username of the target channel (in the format
         * <code>@channelusername</code>). Channel direct messages chats can't be verified.
         */
        public int|string $chat_id,
        /**
         * Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to
         * provide a custom verification description.
         */
        public ?string $custom_description,
    ) {
    }
}
