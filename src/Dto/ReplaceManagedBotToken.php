<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to revoke the current token of a managed bot and generate a new one. Returns the new token as
 * <em>String</em> on success.
 */
final class ReplaceManagedBotToken extends Dto implements TelegramBotDto
{
    public function __construct(
        /** User identifier of the managed bot whose token will be replaced */
        public int $user_id,
    ) {
    }
}
