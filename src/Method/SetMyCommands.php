<?php

declare(strict_types=1);

namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Support\Casts\BotCommandScopeCast;
use Appto\TelegramBot\Type\BotCommand;
use Appto\TelegramBot\Type\BotCommandScope;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Data;

/**
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either
 * <a href="https://en.wikipedia.org/wiki/Query_string">URL query string</a> or
 * <em>application/json</em> or <em>application/x-www-form-urlencoded</em> or
 * <em>multipart/form-data</em> for passing parameters in Bot API requests.On successful call, a
 * JSON-object containing the result will be returned.
 */
class SetMyCommands extends Data implements TelegramMethod
{
    public function __construct(
        /**
         * @var  BotCommand[]  A JSON-serialized list of bot commands to be set as the list of the bot's
         * commands. At most 100 commands can be specified.
         */
        public array $commands,
        /**
         * @var  BotCommandScope|null  A JSON-serialized object, describing scope of users for which the
         * commands are relevant. Defaults to <a href="#botcommandscopedefault">BotCommandScopeDefault</a>.
         */
        #[WithCast(BotCommandScopeCast::class)]
        public ?BotCommandScope $scope,
        /**
         * @var  string|null  A two-letter ISO 639-1 language code. If empty, commands will be applied to all
         * users from the given scope, for whose language there are no dedicated commands.
         */
        public ?string $language_code,
    ) {
    }
}
