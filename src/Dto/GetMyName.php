<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to get the current bot name for the given user language. Returns
 * <a href="https://core.telegram.org/bots/api#botname">BotName</a> on success.
 */
final class GetMyName extends Dto implements TelegramBotDto
{
    public function __construct(
        /** A two-letter ISO 639-1 language code or an empty string */
        public ?string $language_code,
    ) {
    }
}
