<?php
namespace Appto\TelegramBot\Method;

use Appto\TelegramBot\Interface\TelegramMethodInterface;
use Appto\TelegramBot\Type\BotCommandScope;
use Spatie\LaravelData\Data;

/**
 * Use this method to get the current list of the bot's commands for the given
 * scope and user language. Returns an Array of <a
 * href="#botcommand">BotCommand</a> objects. If commands aren't set, an empty list
 * is returned.
 *
 * @version Telegram Bot API 7.10
 */
final class GetMyCommands extends Data implements TelegramMethodInterface
{
    public function __construct(
        /**
         * A JSON-serialized object, describing scope of users. Defaults to <a
         * href="#botcommandscopedefault">BotCommandScopeDefault</a>.
         * @var BotCommandScope
         */
        public ?BotCommandScope $scope,
        /**
         * A two-letter ISO 639-1 language code or an empty string
         * @var string
         */
        public ?string $language_code,
    ) {
    }
}
