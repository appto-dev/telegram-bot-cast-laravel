<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Removes verification from a user who is currently verified <a
 * href="https://telegram.org/verify#third-party-verification">on behalf of the organization</a> represented by the bot.
 * Returns <em>True</em> on success.
 */
final class RemoveUserVerification extends Dto implements TelegramBotDto
{
    public function __construct(
        /** Unique identifier of the target user */
        public int $user_id,
    ) {
    }
}
