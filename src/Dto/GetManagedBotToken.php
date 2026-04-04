<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to get the token of a managed bot. Returns the token as <em>String</em> on success.
 */
final class GetManagedBotToken extends Dto implements TelegramBotDto
{
    public function __construct(
        /** User identifier of the managed bot whose token will be returned */
        public int $user_id,
    ) {
    }
}
