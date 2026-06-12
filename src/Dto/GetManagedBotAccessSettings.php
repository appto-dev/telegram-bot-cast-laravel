<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to get the access settings of a managed bot. Returns a <a
 * href="https://core.telegram.org/bots/api#botaccesssettings">BotAccessSettings</a> object on success.
 */
final class GetManagedBotAccessSettings extends Dto implements TelegramBotDto
{
    public function __construct(
        /** User identifier of the managed bot whose access settings will be returned */
        public int $user_id,
    ) {
    }
}
