<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to change the bot's description, which is shown in the chat with the bot if the chat is empty. Returns
 * <em>True</em> on success.
 */
final class SetMyDescription extends Dto implements TelegramBotDto
{
    public function __construct(
        /** New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for the given language. */
        public ?string $description,
        /**
         * A two-letter ISO 639-1 language code. If empty, the description will be applied to all users for whose language there is
         * no dedicated description.
         */
        public ?string $language_code,
    ) {
    }
}
