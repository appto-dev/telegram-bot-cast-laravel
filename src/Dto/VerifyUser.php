<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Verifies a user <a href="https://telegram.org/verify#third-party-verification">on behalf of the
 * organization</a> which is represented by the bot. Returns <em>True</em> on success.
 */
final class VerifyUser extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the target user */
        public int $user_id,
        /**
         * Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to
         * provide a custom verification description.
         */
        public ?string $custom_description,
    ) {
    }
}
