<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\BotCommandScope;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to get the current list of the bot's commands for the given
 * scope and user language. Returns an Array of <a
 * href="https://core.telegram.org/bots/api#botcommand">BotCommand</a> objects. If
 * commands aren't set, an empty list is returned.
 */
final class GetMyCommands extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * A JSON-serialized object, describing scope of users. Defaults to <a
         * href="https://core.telegram.org/bots/api#botcommandscopedefault">BotCommandScopeDefault</a>.
         */
        public ?BotCommandScope $scope,
        /** A two-letter ISO 639-1 language code or an empty string */
        public ?string $language_code,
    ) {
    }
}
