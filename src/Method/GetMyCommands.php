<?php
namespace ApptoTeam\TelegramBotCastLaravel\Method;

use ApptoTeam\TelegramBotCastLaravel\Interface\MethodInterface;
use ApptoTeam\TelegramBotCastLaravel\Type\BotCommand;
use ApptoTeam\TelegramBotCastLaravel\Type\BotCommandScope;
use Spatie\LaravelData\Data;

/**
 * GetMyCommands
 *
 * Use this method to get the current list of the bot's commands for the given
 * scope and user language. Returns an Array of BotCommand objects. If commands
 * aren't set, an empty list is returned.
 *
 * @package Telegram Bot Cast
 * @author Sergey Makhlenko <https://t.me/SergeyMakhlenko>
 * @license https://mit-license.org/license.txt The MIT License (MIT)
 */
final class GetMyCommands extends Data implements MethodInterface
{
    public const RESPONSE_TYPE = [BotCommand::class];

    public function __construct(
        /**
         * A JSON-serialized object, describing scope of users. Defaults to
         * BotCommandScopeDefault.
         */
        public ?BotCommandScope $scope,
        /** A two-letter ISO 639-1 language code or an empty string */
        public ?string $language_code,
    ) {
    }
}
