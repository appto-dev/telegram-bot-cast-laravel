<?php

namespace Appto\TelegramBot\Dto;

use Appto\TelegramBot\Data\BotCommand;
use Appto\TelegramBot\Interfaces\BotCommandScope;
use Appto\TelegramBot\Interfaces\TelegramBotDto;
use Spatie\LaravelData\Dto;

/**
 * Use this method to change the list of the bot's commands. See <a
 * href="https://core.telegram.org/bots/features#commands">this manual</a> for more
 * details about bot commands. Returns <em>True</em> on success.
 */
final class SetMyCommands extends Dto implements TelegramBotDto
{
    public function __construct(
        /**
         * A JSON-serialized list of bot commands to be set as the list of the bot's
         * commands. At most 100 commands can be specified.
         */
        public BotCommand $commands,
        /**
         * A JSON-serialized object, describing scope of users for which the commands are
         * relevant. Defaults to <a
         * href="#botcommandscopedefault">BotCommandScopeDefault</a>.
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
