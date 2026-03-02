<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to change the bot's name. Returns <em>True</em> on success.
 */
final class SetMyName extends Dto implements TelegramBotDto
{
    public function __construct(
        /** New bot name; 0-64 characters. Pass an empty string to remove the dedicated name for the given language. */
        public ?string $name,
        /**
         * A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose language there
         * is no dedicated name.
         */
        public ?string $language_code,
    ) {
    }
}
