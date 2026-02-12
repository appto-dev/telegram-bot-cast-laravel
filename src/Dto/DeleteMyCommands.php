<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Interfaces\BotCommandScope;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to delete the list of the bot's commands for the given scope and
 * user language. After deletion, <a
 * href="https://core.telegram.org/bots/api#determining-list-of-commands">higher
 * level commands</a> will be shown to affected users. Returns <em>True</em> on
 * success.
 */
final class DeleteMyCommands extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * A JSON-serialized object, describing scope of users for which the commands are
         * relevant. Defaults to <a
         * href="https://core.telegram.org/bots/api#botcommandscopedefault">BotCommandScopeDefault</a>.
         */
        public ?BotCommandScope $scope,
        /**
         * A two-letter ISO 639-1 language code. If empty, commands will be applied to all
         * users from the given scope, for whose language there are no dedicated commands
         */
        public ?string $language_code,
    ) {
    }
}
