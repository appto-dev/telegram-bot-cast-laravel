<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Contracts\TelegramMethodContract;
use Appto\TelegramBot\Type\BotCommand;
use Appto\TelegramBot\Type\BotCommandScope;
use Spatie\LaravelData\Data;

/**
 * Use this method to change the list of the bot's commands. See <a
 * href="/bots/features#commands">this manual</a> for more details about bot
 * commands. Returns <em>True</em> on success.
 *
 * @version Telegram Bot API 7.10
 */
final class SetMyCommands extends Data implements TelegramMethodContract
{
    public function __construct(
        /**
         * A JSON-serialized list of bot commands to be set as the list of the bot's
         * commands. At most 100 commands can be specified.
         * @var BotCommand[]
         */
        public array $commands,
        /**
         * A JSON-serialized object, describing scope of users for which the commands are
         * relevant. Defaults to BotCommandScopeDefault.
         * @var BotCommandScope
         */
        public ?BotCommandScope $scope,
        /**
         * A two-letter ISO 639-1 language code. If empty, commands will be applied to all
         * users from the given scope, for whose language there are no dedicated commands
         * @var string
         */
        public ?string $language_code,
    ) {
    }
}
